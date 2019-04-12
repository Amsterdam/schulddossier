<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\GebruikerFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/app/gebruiker")
 * @Security("has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
 */
class AppGebruikerController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        /** @var $repository GebruikerRepository */
        $repository = $em->getRepository(Gebruiker::class);

        $maxPageSize = 1000;
        /** @var Gebruiker $user */
        $user = $this->getUser();
        $gebruikers = '';
        switch ($user->getType()) {
            case Gebruiker::TYPE_MADI_KEYUSER:
                $gebruikers = $repository->findAllByTypeAndSchuldhulpbureau([Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER], $user->getSchuldhulpbureaus(), $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

                break;

            case Gebruiker::TYPE_GKA_APPBEHEERDER:
                $gebruikers = $repository->findAllByType([Gebruiker::TYPE_GKA, Gebruiker::TYPE_GKA_APPBEHEERDER, Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER], $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

                break;

            case Gebruiker::TYPE_ADMIN:
                $gebruikers = $repository->findAllByType([Gebruiker::TYPE_ADMIN, Gebruiker::TYPE_GKA, Gebruiker::TYPE_GKA_APPBEHEERDER, Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER], $request->query->getInt('page', 0), $request->query->getInt('pageSize', $maxPageSize));

                break;
        }

        $onbekendeGebruikers = $repository->findAllOnbekendeGebruikers()->getQuery()->getResult();

        return $this->render('Gebruiker/index.html.twig', [
            'gebruikers' => $gebruikers,
            'onbekendeGebruikers' => $onbekendeGebruikers,
            'pagination' => [
                'reverse' => 'gemeenteamsterdam_fixxxschuldhulp_appgebruiker_index',
                'reverse_params' => [],
                'page' => $request->query->getInt('page', 0),
                'pageSize' => $maxPageSize,
                'numberOfItems' => count($gebruikers),
                'numberOfPages' => ceil(count($gebruikers) / $request->query->getInt('pageSize', $maxPageSize))
            ]
        ]);
    }

    /**
     * @Route("/nieuw")
     * @Security("has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request, EntityManagerInterface $em)
    {
        $gebruiker = new Gebruiker();
        $form = $this->createForm(GebruikerFormType::class, $gebruiker);
        $form->remove('enabled');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($gebruiker);
            $em->flush();
            $this->addFlash('success', 'Gebruiker aangemaakt');
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_update', [
                'gebruikerId' => $gebruiker->getId()
            ]);
        }
        return $this->render('Gebruiker/create.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/detail/{gebruikerId}/bewerken")
     * @Security("has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
     * @ParamConverter("gebruiker", options={"id"="gebruikerId"})
     */
    public function updateAction(Request $request, EntityManagerInterface $em, Gebruiker $gebruiker, EventDispatcherInterface $eventDispatcher, TokenStorageInterface $tokenStorage)
    {
        if ($this->getUser()->getType() === Gebruiker::TYPE_MADI_KEYUSER) {
            if (!$gebruiker->getSchuldhulpbureaus()->isEmpty() && empty(array_intersect($this->getUser()->getSchuldhulpbureaus()->toArray(), $gebruiker->getSchuldhulpbureaus()->toArray()))) {
                throw $this->createAccessDeniedException();
            }
        }

        $form = $this->createForm(GebruikerFormType::class, $gebruiker, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Opgeslagen');
            /** @var Gebruiker $currentGebruiker */
            $currentGebruiker = $tokenStorage->getToken()->getUser();
            $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerGebruikerGewijzigd($currentGebruiker, $gebruiker));
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_update', [
                'gebruikerId' => $gebruiker->getId()
            ]);
        }
        return $this->render('Gebruiker/update.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView()
        ]);
    }
}
