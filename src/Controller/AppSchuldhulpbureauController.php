<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldhulpbureauFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/app/schuldhulpbureau")
 * @Security("is_granted('ROLE_USER')")
 */
class AppSchuldhulpbureauController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository SchuldhulpbureauRepository */
        $repository = $em->getRepository(Schuldhulpbureau::class);

        $maxPageSize = 10;

        $schuldhulpbureaus = $repository->findAll($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

        return $this->render('Schuldhulpbureau/index.html.twig', [
            'schuldhulpbureaus' => $schuldhulpbureaus,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($schuldhulpbureaus),
                'numberOfPages' => ceil(count($schuldhulpbureaus) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
     */
    public function createAction(Request $request, EntityManagerInterface $em, AllegroService $allegroService)
    {
        $schuldhulpbureau = new Schuldhulpbureau();
        $form = $this->createForm(SchuldhulpbureauFormType::class, $schuldhulpbureau);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($schuldhulpbureau);
            $em->flush();

            if (!$form['allegroCheck']->getData()) {
                $this->addFlash('success', 'Schuldhulpbureau aangemaakt');
            } else {
                if (false !== $allegroService->login($schuldhulpbureau, true)) {
                    $this->addFlash('success', 'Schuldhulpbureau aangemaakt en verbinding met allegro succesvol getest');
                } else {
                    $this->addFlash('error', 'Schuldhulpbureau aangemaakt zonder verbinding met allegro te kunnen maken');
                }
            }
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldhulpbureau_update', [
                'schuldhulpbureauId' => $schuldhulpbureau->getId()
            ]);
        }
        return $this->render('Schuldhulpbureau/create.html.twig', [
            'schuldhulpbureau' => $schuldhulpbureau,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{schuldhulpbureauId}/bewerken")
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
     * @ParamConverter("schuldhulpbureau", options={"id"="schuldhulpbureauId"})
     */
    public function updateAction(Request $request, EntityManagerInterface $em, Schuldhulpbureau $schuldhulpbureau, AllegroService $allegroService)
    {
        $form = $this->createForm(SchuldhulpbureauFormType::class, $schuldhulpbureau, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            if (!$form['allegroCheck']->getData()) {
                $this->addFlash('success', 'Opgeslagen');
            } else {
                if (false !== $allegroService->login($schuldhulpbureau, true)) {
                    $this->addFlash('success', 'Opgeslagen en verbinding met allegro succesvol getest');
                } else {
                    $this->addFlash('error', 'Opgeslagen zonder verbinding met allegro te kunnen maken');
                }
            }
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldhulpbureau_update', [
                'schuldhulpbureauId' => $schuldhulpbureau->getId()
            ]);
        }
        return $this->render('Schuldhulpbureau/update.html.twig', [
            'schuldhulpbureau' => $schuldhulpbureau,
            'form' => $form->createView()
        ]);
    }
}
