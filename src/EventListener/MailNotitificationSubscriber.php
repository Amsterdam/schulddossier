<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Workflow\Event\Event;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierTimeline;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Psr\Log\LoggerInterface;

class MailNotitificationSubscriber implements EventSubscriberInterface
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var string
     */
    private $fromNotificiatieAdres;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(\Swift_Mailer $mailer, $fromNotificiatieAdres, LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->fromNotificiatieAdres = $fromNotificiatieAdres;
        $this->logger = $logger;
    }

    public function notifyGka(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if (empty($dossier->getTeamGka()->getEmail()) === false) {
            $message = new \Swift_Message();
            $message->addFrom('test@markei.nl');
            $message->addTo($dossier->getTeamGka()->getEmail());
            $message->setSubject('Dossier overgedragen naar het GKA');
            $message->setBody('Dossier: ' . $dossier->getId() . ' / Client: ' . $dossier->getClientNaam());
            $this->mailer->send($message);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen team is toegewezen of er geen e-mailadres is ingevuld voor het team van dit dossier', ['dossierId' => $dossier->getId(), 'teamId' => $dossier->getTeamGka() ? $dossier->getTeamGka()->getId() : 'n/a']);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.dossier_flow.completed.verzenden_madi' => 'notifyGka',
            //'workflow.dossier_flow.completed.gestart_gka' => 'notifyMadi',
        ];
    }
}