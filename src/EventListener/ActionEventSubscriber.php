<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent as Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ActionEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * ActionEventSubscriber constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param RequestStack           $requestStack
     */
    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
    }

    /**
     * @param Event        $event
     * @param RequestStack $requestStack
     */
    public function registerAction(Event $event): void
    {
        $action = new ActionEvent();

        $action->setDatumTijd($event->getDateTimeOfEvent());

        $action->setName($event->getActionName());
        $action->setIp($this->requestStack->getMasterRequest()->getClientIp());

        if (!empty($event->getDossier())) {
            $action->setDossier($event->getDossier());
        }

        if (!empty($event->getGebruiker())) {
            $action->setGebruiker($event->getGebruiker());
        }

        if (!empty($event->getGewijzigdeGebruiker())) {
            $action->setGewijzigdeGebruiker($event->getGewijzigdeGebruiker());
        }

        $this->entityManager->persist($action);
        $this->entityManager->flush();
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'app.action.register' => 'registerAction'
        ];
    }
}
