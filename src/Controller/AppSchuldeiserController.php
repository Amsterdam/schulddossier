<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldeiserFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\SchuldeiserRepository;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;

#[IsGranted(attribute: new Expression(
    "is_granted('ROLE_SHV') || is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')"
))]
class AppSchuldeiserController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/schuldeiser/')]
    public function index(Request $request, EntityManagerInterface $em, SerializerInterface $jsonSerializer)
    {
        /** @var $schuldeiserRepository SchuldeiserRepository */
        $schuldeiserRepository = $em->getRepository(Schuldeiser::class);

        if ($request->isXmlHttpRequest()) {
            $items = $schuldeiserRepository->search($request->query->all('q'), 0, -1);
            return new JsonResponse($jsonSerializer->normalize($items));
        }

        $maxPageSize = 50;

        $items = $schuldeiserRepository->search(
            $request->query->all('q'),
            $request->query->getInt('page', 0),
            $request->query->getInt('pageSize', $maxPageSize),
            false
        );


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

    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/schuldeiser/nieuw')]
    #[IsGranted(attribute: new Expression(
        "is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"
    ))]
    public function create(Request $request, EntityManagerInterface $em, SerializerInterface $jsonSerializer)
    {
        $schuldeiser = new Schuldeiser();

        $form = $this->createForm(SchuldeiserFormType::class, $schuldeiser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($schuldeiser);
            $em->flush($schuldeiser);

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse($jsonSerializer->normalize($schuldeiser), JsonResponse::HTTP_CREATED);
            }

            $this->addFlash('succes', 'Schuldeiser aangemaakt');
            return $this->redirectToRoute(
                'gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_update',
                ['schuldeiserId' => $schuldeiser->getId()]
            );
        } elseif ($form->isSubmitted() && $form->isValid() === false) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(
                    $jsonSerializer->normalize($form->getErrors(true, true)),
                    JsonResponse::HTTP_BAD_REQUEST
                );
            }
        }

        return $this->render('Schuldeiser/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/schuldeiser/detail/{schuldeiserId}/bewerken')]
    #[IsGranted(attribute: new Expression(
        "is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"
    ))]
    public function update(
        Request $request,
        EntityManagerInterface $em,
        #[MapEntity(id: 'schuldeiserId')]
        Schuldeiser $schuldeiser
    ) {
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
