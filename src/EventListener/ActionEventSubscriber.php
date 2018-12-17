<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent as ActionEventEntity;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

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
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * ActionEventSubscriber constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param RequestStack           $requestStack
     * @param TokenStorageInterface  $tokenStorage
     */
    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, TokenStorageInterface $tokenStorage)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param ActionEvent $event
     */
    public function registerAction(ActionEvent $event): void
    {
        $action = new ActionEventEntity();

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

    public function registerLoginAction(InteractiveLoginEvent $event)
    {
        /** @var Gebruiker $gebruiker */
        $gebruiker = $this->tokenStorage->getToken()->getUser();
        $action = new ActionEventEntity();
        $dateTime = new \DateTime();

        $action->setName(ActionEvent::GEBRUIKER_INGELOGD);
        $action->setIp($this->requestStack->getMasterRequest()->getClientIp());
        $action->setGebruiker($gebruiker);
        $action->setDatumTijd($dateTime);

        $this->entityManager->persist($action);
        $this->entityManager->flush();
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'app.action.register' => 'registerAction',
            'security.interactive_login' => 'registerLoginAction',
        ];
    }
}
