<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\VoorleggerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DetailDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierDocumentFormType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\FormError;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @Route("/app/dossier")
 * @Security("has_role('ROLE_USER')")
 */
class AppDossierController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository DossierRepository */
        $repository = $em->getRepository(Dossier::class);

        $maxPageSize = 10;

        $dossiers = $repository->findAll($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Dossier/index.html.twig', [
            'dossiers' => $dossiers,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($dossiers),
                'numberOfPages' => ceil(count($dossiers) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
    {
        $dossier = new Dossier();
        $dossier->setAanmaker($this->getUser());
        $dossier->setDossierTemplate('v1');
        $form = $this->createForm(CreateDossierFormType::class, $dossier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($dossier);
            $em->flush();
            $this->addFlash('success', 'Dossier aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', [
                'dossierId' => $dossier->getId()
            ]);
        }
        return $this->render('Dossier/create.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function detailAction(Request $request, EntityManagerInterface $em, Dossier $dossier)
    {
        if ($dossier->getVoorlegger() === null) {
            $dossier->setVoorlegger(new Voorlegger());
        }
        $form = $this->createForm(DetailDossierFormType::class, $dossier, [
            'disable_group' => $this->getUser()->getType()
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            if ($request->isXmlHttpRequest() === true) {
                return new JsonResponse(['status' => 'OK']);
            }
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', [
                'dossierId' => $dossier->getId()
            ]);
        }
        if ($request->isXmlHttpRequest() === true) {
            $errors = [];
            foreach ($form->getErrors(true, true) as $error) {
                /** @var $error FormError */
                $errors[] = ['origin' => $error->getOrigin(), 'message' => $error->getMessage()];
            }
            return new JsonResponse($errors, Response::HTTP_BAD_REQUEST);
        }

        $uploadForm = $this->createForm(DossierDocumentFormType::class, null, ['action' => $this->generateUrl('gemeenteamsterdam_fixxxschuldhulp_appdossier_adddocument', ['dossierId' => $dossier->getId()])]);

        return $this->render('Dossier/detail.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView(),
            'uploadForm' => $uploadForm->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/nieuw")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     */
    public function addDocumentAction(Request $request, EntityManagerInterface $em, Dossier $dossier)
    {
        $dossierDocument = new DossierDocument();
        $form = $this->createForm(DossierDocumentFormType::class, $dossierDocument);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dossierDocument->setDossier($dossier);
            $dossierDocument->getDocument()->setUploader($this->getUser());
            $dossierDocument->getDocument()->setMainTag('dossier-' . $dossier->getId());
            $dossierDocument->getDocument()->setGroep('dossier');
            $em->persist($dossierDocument);
            $em->flush();
            $this->addFlash('success', 'Document toegevoegd');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_detail', [
                'dossierId' => $dossier->getId()
            ]);
        }
        return $this->render('Dossier/addDocument.html.twig', [
            'dossier' => $dossier,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{dossierId}/documenten/detail/{documentId}")
     * @ParamConverter("dossier", options={"id"="dossierId"})
     * @ParamConverter("document", options={"id"="documentId"})
     */
    public function detailDocumentAction(Request $request, Dossier $dossier, Document $document)
    {
    }
}