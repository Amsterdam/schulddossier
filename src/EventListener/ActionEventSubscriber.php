<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use DateTime;
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
    private const systemActions = [
        ActionEvent::GEBRUIKER_DELETED_SYSTEM,
        ActionEvent::GEBRUIKER_DISABLED_SYSTEM
    ];

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * @var RequestStack
     */
    private RequestStack $requestStack;

    /**
     * ActionEventSubscriber constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param RequestStack $requestStack
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

        $action->setIp(
            in_array($event->getActionName(), self::systemActions) ?
                '127.0.0.1' :
                $this->requestStack->getMainRequest()->getClientIp()
        );

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
        $dateTime = new DateTime();

        $gebruiker->setLastLogin($dateTime);

        $action->setName(ActionEvent::GEBRUIKER_INGELOGD);
        $action->setIp($this->requestStack->getMasterRequest()->getClientIp());
        $action->setDatumTijd($dateTime);
        $action->setData(
            ActionEvent::getGebruikerData($gebruiker)

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
        $gebruiker = $event->gebruiker;
        /** @var Dossier $dossier */
        $dossier = $event->dossier;
        $action = new ActionEventEntity();

        $dateTime = new DateTime();

        $action->setName(null === $event->forceType ? ActionEvent::DOSSIER_GEWIJZIGD : $event->forceType);
        $action->setDatumTijd($dateTime);
        $action->setDossier($dossier);
        $action->setIp($this->requestStack->getMainRequest()->getClientIp());
        $action->setData(
            array_merge(
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
