<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Workflow\Event\Event;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierTimeline;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DossierTimelineWorkflowSubscriber implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    public function __construct(EntityManagerInterface $em, TokenStorageInterface $tokenStorage)
    {
        $this->em = $em;
        $this->tokenStorage = $tokenStorage;
    }

    public function onComplete(Event $event)
    {
        $timeline = new DossierTimeline();
        $timeline->setDatumtijd(new \DateTime());
        $timeline->setType(DossierTimeline::TYPE_WORKFLOW);
        $timeline->setSubtype($event->getTransition()->getName());
        $timeline->setOmschrijving('Status veranderd');
        $timeline->setGebruiker($this->tokenStorage->getToken() ? $this->tokenStorage->getToken()->getUser() : null);
        $timeline->setData([
            'transition' => $event->getTransition()->getName(),
            'tos' => $event->getTransition()->getTos(),
            'froms' => $event->getTransition()->getFroms(),
        ]);
        $timeline->setDossier($event->getSubject());

        $this->em->flush();
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.dossier_flow.completed' => 'onComplete'
        ];
    }
}