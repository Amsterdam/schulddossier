<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent as ActionEventEntity;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierChangedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
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
     * @param ActionEvent $event
     */
    public function registerAction(ActionEvent $event): void
    {
        $action = new ActionEventEntity();
        $dossier = $event->getDossier();

        $action->setDossier($dossier);
        $action->setDatumTijd($event->getDateTimeOfEvent());

        $action->setName($event->getActionName());
        $action->setIp($this->requestStack->getMasterRequest()->getClientIp());

        if (!empty($event->getData())) {
            $action->setData($event->getData());
        }

        $this->entityManager->persist($action);
        $this->entityManager->flush();
    }

    public function registerLoginAction(InteractiveLoginEvent $event): void
    {
        /** @var Gebruiker $gebruiker */
        $gebruiker = $event->getAuthenticationToken()->getUser();
        $action = new ActionEventEntity();
        $dateTime = new \DateTime();

        $action->setName(ActionEvent::GEBRUIKER_INGELOGD);
        $action->setIp($this->requestStack->getMasterRequest()->getClientIp());
        $action->setDatumTijd($dateTime);
        $action->setData([
                ActionEvent::getGebruikerData($gebruiker)
            ]
        );

        $this->entityManager->persist($action);
        $this->entityManager->flush();
    }

    /**
     * @param DossierChangedEvent $event
     */
    public function registerDossierChange(DossierChangedEvent $event): void
    {
        /** @var Gebruiker $gebruiker */
        $gebruiker = $event->getGebruiker();
        /** @var Dossier $dossier */
        $dossier = $event->getDossier();
        $action = new ActionEventEntity();

        $dateTime = new \DateTime();

        $action->setName(ActionEvent::DOSSIER_GEWIJZIGD);
        $action->setDatumTijd($dateTime);
        $action->setDossier($dossier);
        $action->setIp($this->requestStack->getMasterRequest()->getClientIp());
        $action->setData(array_merge(
                ActionEvent::getGebruikerData($gebruiker),
                ActionEvent::getDossierData($dossier)
            )
        );

        $this->entityManager->persist($action);
        $this->entityManager->flush();
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ActionEvent::NAME => 'registerAction',
            'security.interactive_login' => 'registerLoginAction',
            DossierChangedEvent::NAME => 'registerDossierChange',
        ];
    }
}
