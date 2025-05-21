<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\OrganisatieFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\OrganisatieRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
class AppOrganisatieController extends AbstractController
{
    #[Route(path: '/app/organisatie/')]
    public function index(Request $request, EntityManagerInterface $em): \Symfony\Component\HttpFoundation\Response
    {
        /** @var $repository OrganisatieRepository */
        $repository = $em->getRepository(Organisatie::class);

        $maxPageSize = 10;

        $organisaties = $repository->findAll(
            $request->query->getInt('page', 0),
            $request->query->getInt('pageSize', $maxPageSize)
        );

        return $this->render('Organisatie/index.html.twig', [
            'organisaties' => $organisaties,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($organisaties),
                'numberOfPages' => ceil(count($organisaties) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    #[Route(path: '/app/organisatie/nieuw')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"))]
    public function create(Request $request, EntityManagerInterface $em, AllegroService $allegroService)
    {
        $organisatie = new Organisatie();
        $form = $this->createForm(OrganisatieFormType::class, $organisatie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($organisatie);
            $em->flush();

            if (!$form['allegroCheck']->getData()) {
                $this->addFlash('success', 'Organisatie aangemaakt');
            } else {
                if (false !== $allegroService->login($organisatie, true)) {
                    $this->addFlash('success', 'Organisatie aangemaakt en verbinding met allegro succesvol getest');
                } else {
                    $this->addFlash('error', 'Organisatie aangemaakt zonder verbinding met allegro te kunnen maken');
                }
            }
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_apporganisatie_update', [
                'organisatieId' => $organisatie->getId()
            ]);
        }
        return $this->render('Organisatie/create.html.twig', [
            'organisatie' => $organisatie,
            'form' => $form->createView()
        ]);
    }

    #[Route(path: '/app/organisatie/detail/{organisatieId}/bewerken')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"))]
    public function update(
        Request $request,
        EntityManagerInterface $em,
        #[MapEntity(id: 'organisatieId')]
        Organisatie $organisatie,
        AllegroService $allegroService
    ) {
        $form = $this->createForm(OrganisatieFormType::class, $organisatie, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            if (!$form['allegroCheck']->getData()) {
                $this->addFlash('success', 'Opgeslagen');
            } else {
                if (false !== $allegroService->login($organisatie, true)) {
                    $this->addFlash('success', 'Opgeslagen en verbinding met allegro succesvol getest');
                } else {
                    $this->addFlash('error', 'Opgeslagen zonder verbinding met allegro te kunnen maken');
                }
            }
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_apporganisatie_update', [
                'organisatieId' => $organisatie->getId()
            ]);
        }
        return $this->render('Organisatie/update.html.twig', [
            'organisatie' => $organisatie,
            'form' => $form->createView()
        ]);
    }
}
