<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\CreateDossierFormType;

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
    public function detailAction(Request $request, Dossier $dossier)
    {
        return $this->render('Dossier/detail.html.twig', [
            'dossier' => $dossier
        ]);
    }
}