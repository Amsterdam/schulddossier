<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\TeamFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
class AppTeamController extends AbstractController
{
    #[Route(path: '/app/team/')]
    public function index(Request $request, EntityManagerInterface $em): \Symfony\Component\HttpFoundation\Response
    {
        /** @var $repository TeamRepository */
        $repository = $em->getRepository(Team::class);

        $maxPageSize = 10;

        $teams = $repository->findAll(
            $request->query->getInt('page', 0),
            $request->query->getInt('pageSize', $maxPageSize)
        );

        return $this->render('Team/index.html.twig', [
            'teams' => $teams,
            'pagination' => [
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($teams),
                'numberOfPages' => ceil(count($teams) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    #[Route(path: '/app/team/nieuw')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"))]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $team = new Team();
        $form = $this->createForm(TeamFormType::class, $team);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($team);
            $em->flush();
            $this->addFlash('success', 'Team aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appteam_update', [
                'teamId' => $team->getId()
            ]);
        }
        return $this->render('Team/create.html.twig', [
            'team' => $team,
            'form' => $form->createView()
        ]);
    }

    #[Route(path: '/app/team/detail/{teamId}/bewerken')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"))]
    public function update(
        Request $request,
        EntityManagerInterface $em,
        #[MapEntity(id: 'teamId')]
        Team $team
    ) {
        $form = $this->createForm(TeamFormType::class, $team, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appteam_update', [
                'teamId' => $team->getId()
            ]);
        }
        return $this->render('Team/update.html.twig', [
            'team' => $team,
            'form' => $form->createView()
        ]);
    }
}
