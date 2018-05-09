<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DetailDossierFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierDocumentFormType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\FormError;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\SchuldeiserRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldeiserFormType;

/**
 * @Route("/app/schuldeiser")
 * @Security("has_role('ROLE_MADI') || has_role('ROLE_GKA') || has_role('ROLE_ADMIN')")
 */
class AppSchuldeiserController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $schuldeiserRepository SchuldeiserRepository */
        $schuldeiserRepository = $em->getRepository(Schuldeiser::class);

        if ($request->isXmlHttpRequest()) {
            $items = $schuldeiserRepository->search($request->query->get('q'), 0, -1);
            return new JsonResponse($this->get('json_serializer')->normalize($items));
        }

        $maxPageSize = 50;

        $items = $schuldeiserRepository->search($request->query->get('q'), $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));


        return $this->render('Schuldeiser/index.html.twig', [
            'schuldeisers' => $items,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($items),
                'numberOfPages' => ceil(count($items) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
    {
        $schuldeiser = new Schuldeiser();

        $form = $this->createForm(SchuldeiserFormType::class, $schuldeiser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($schuldeiser);
            $em->flush($schuldeiser);

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($schuldeiser), JsonResponse::HTTP_CREATED);
            }

            $this->addFlash('succes', 'Schuldeiser aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_update', ['schuldeiserId' => $schuldeiser->getId()]);
        } elseif ($form->isSubmitted() && $form->isValid() === false) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($this->get('json_serializer')->normalize($form->getErrors(true, true)), JsonResponse::HTTP_BAD_REQUEST);
            }
        }

        return $this->render('Schuldeiser/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{schuldeiserId}/bewerken")
     * @ParamConverter("schuldeiser", options={"id"="schuldeiserId"})
     */
    public function updateAction(Request $request, EntityManagerInterface $em, Schuldeiser $schuldeiser)
    {
        $form = $this->createForm(SchuldeiserFormType::class, $schuldeiser, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_update', [
                'schuldeiserId' => $schuldeiser->getId()
            ]);
        }
        return $this->render('Schuldeiser/update.html.twig', [
            'schuldeiser' => $schuldeiser,
            'form' => $form->createView()
        ]);
    }
}