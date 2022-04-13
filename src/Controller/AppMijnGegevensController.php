<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\MijnGegevensFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/app/mijn-gegevens")
 */
class AppMijnGegevensController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, EntityManagerInterface $em, EventDispatcherInterface $eventDispatcher)
    {
        $gebruiker = $this->getUser();
        $form = $this->createForm(MijnGegevensFormType::class, $gebruiker);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->flush();
                $this->addFlash('success', 'Opgeslagen');
                $eventDispatcher->dispatch(ActionEvent::registerGebruikerGewijzigd($gebruiker, $gebruiker), ActionEvent::NAME);
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
