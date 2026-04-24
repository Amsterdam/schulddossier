<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldeiserFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\OrganisatieRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\SchuldeiserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/app/schuldeiser")
 * @Security("is_granted('ROLE_SHV') || is_granted('ROLE_GKA') || is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_SHV_KEYUSER') || is_granted('ROLE_ADMIN')")
 */
class AppSchuldeiserController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/schuldeiser/')]
    public function index(Request $request, SchuldeiserRepository $repository, SerializerInterface $jsonSerializer)
    {
        if ($request->isXmlHttpRequest()) {
            $items = $repository->search($request->query->get('q'), 0, -1);
            return new JsonResponse($jsonSerializer->normalize($items));
        }

        $maxPageSize = 50;

        $items = $repository->search(
            $request->query->get('q'),
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

    #[\Symfony\Component\Routing\Attribute\Route(path: '/synchroniseer')]
    #[IsGranted(attribute: new Expression(
        "is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"
    ))]
    public function synchroniseAction(EntityManagerInterface $entityManager, AllegroService $allegroService)
    {
        /** @var OrganisatieRepository $organisatieRepository */
        $organisatieRepository = $entityManager->getRepository(Organisatie::class);

        /** @var Organisatie $allegroId */
        $allegroId = $organisatieRepository->fetchAllegroUser();

        $statistics = $allegroService->syncSchuldeisers($allegroId);

        $this->addFlash(
            'success',
            'Schuldeisers gesynchroniseerd. ' .
                'Aantal toegevoegd: ' . $statistics['created'] . '. ' .
                'Aantal bijgewerkt: ' . $statistics['updated'] . '. ' .
                'Aantal op actief gezet: ' . $statistics['made-active'] . '. ' .
                'Aantal op inactief gezet: ' . $statistics['made-inactive'] . '. '
        );

        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appschuldeiser_index');
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
