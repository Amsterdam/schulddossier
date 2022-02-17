<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldeiserFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\SchuldeiserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/app/schuldeiser")
 * @Security("is_granted('ROLE_MADI') || is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_MADI_KEYUSER') || is_granted('ROLE_ADMIN')")
 */
class AppSchuldeiserController extends AbstractController
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

        $items = $schuldeiserRepository->search($request->query->get('q'), $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize), false);


        return $this->render('Schuldeiser/index.html.twig', [
            'schuldeisers' => $items,
            'pagination' => [
                'reverse' => 'gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_index',
                'reverse_params' => [],
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($items),
                'numberOfPages' => ceil(count($items) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     * @Security("is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
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
     * @Security("is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
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
