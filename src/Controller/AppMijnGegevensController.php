<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\MijnGegevensFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/app/mijn-gegevens")
 */
class AppMijnGegevensController extends Controller
{
    /**
     * @Route("/")
     * @Security("has_role('ROLE_GKA_APPBEHEERDER') || has_role('ROLE_MADI_KEYUSER') || has_role('ROLE_ADMIN')")
     */
    public function indexAction(Request $request, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher, TokenStorageInterface $tokenStorage)
    {
        $gebruiker = $this->getUser();
        $form = $this->createForm(MijnGegevensFormType::class, $gebruiker, []);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->flush();
                $this->addFlash('success', 'Opgeslagen');
                /** @var Gebruiker $currentGebruiker */
                $currentGebruiker = $tokenStorage->getToken()->getUser();
                $eventDispatcher->dispatch(ActionEvent::NAME, ActionEvent::registerGebruikerGewijzigd($currentGebruiker, $gebruiker));
                return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appmijngegevens_index');
            } else {
                foreach ($form->getErrors() as $key => $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            }
        }
        return $this->render('MijnGegevens/index.html.twig', [
            'gebruiker' => $gebruiker,
            'form' => $form->createView()
        ]);
    }
}
