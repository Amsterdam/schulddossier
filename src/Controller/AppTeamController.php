<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\TeamFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/app/team")
 * @Security("has_role('ROLE_USER')")
 */
class AppTeamController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository TeamRepository */
        $repository = $em->getRepository(Team::class);

        $maxPageSize = 10;

        $teams = $repository->findAll($request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

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

    /**
     * @Route("/nieuw")
     * @Security("has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
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

    /**
     * @Route("/detail/{teamId}/bewerken")
     * @Security("has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_ADMIN')")
     * @ParamConverter("team", options={"id"="teamId"})
     */
    public function updateAction(Request $request, EntityManagerInterface $em, Team $team)
    {
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
