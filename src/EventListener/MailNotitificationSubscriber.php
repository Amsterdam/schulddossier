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
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    public function __construct(\Swift_Mailer $mailer, $fromNotificiatieAdres, LoggerInterface $logger, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator)
    {
        $this->mailer = $mailer;
        $this->fromNotificiatieAdres = $fromNotificiatieAdres;
        $this->logger = $logger;
        $this->tokenStorage = $tokenStorage;
        $this->urlGenerator = $urlGenerator;
    }

    public function notifyVerzendenMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getTeamGka() !== null && empty($dossier->getTeamGka()->getEmail()) === false) {
            $message = new \Swift_Message();
            $message->addFrom($this->fromNotificiatieAdres);
            $message->addTo($dossier->getTeamGka()->getEmail());
            $message->setSubject('Nieuw schulddossier (' . $dossier->getSchuldhulpbureau()->getNaam() . ')');
            $message->setBody('Hallo, ' . PHP_EOL . 'Er staat een nieuw dossier klaar voor ' . $dossier->getTeamGka()->getNaam() . '.' . PHP_EOL . PHP_EOL . 'Afzender: ' . $this->tokenStorage->getToken()->getUser()->getNaam() . PHP_EOL . 'Ingezonden op: ' . date('d-m-Y') . PHP_EOL . PHP_EOL . $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', ['dossierId' => $dossier->getId()], UrlGeneratorInterface::ABSOLUTE_URL));
            $this->mailer->send($message);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen team is toegewezen of er geen e-mailadres is ingevuld voor het team van dit dossier', ['dossierId' => $dossier->getId(), 'teamId' => $dossier->getTeamGka() ? $dossier->getTeamGka()->getId() : 'n/a']);
        }
    }

    public function notifyAfkeurenMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $message = new \Swift_Message();
            $message->addFrom($this->fromNotificiatieAdres);
            $message->addTo($dossier->getMedewerkerSchuldhulpbureau()->getEmail());
            $message->setSubject('Dossier afgekeurd (' . $dossier->getSchuldhulpbureau()->getNaam() . ')');
            $message->setBody('Hallo ' . $dossier->getMedewerkerSchuldhulpbureau()->getNaam() . ', ' . PHP_EOL . 'Een door jouw ingezonden dossier is door de controleur afgekeurd.' . PHP_EOL . PHP_EOL . 'Afzender: ' . $this->tokenStorage->getToken()->getUser()->getNaam() . PHP_EOL . 'Controle op: ' . date('d-m-Y') . PHP_EOL . PHP_EOL . $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', ['dossierId' => $dossier->getId()], UrlGeneratorInterface::ABSOLUTE_URL));
            $this->mailer->send($message);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen medewerker schuldhulpbureau opgegeven of er is geen e-mailadres voor de medewerker van dit dossier ingevuld', ['dossierId' => $dossier->getId(), 'gebruikerId' => $dossier->getMedewerkerSchuldhulpbureau() ? $dossier->getMedewerkerSchuldhulpbureau()->getId() : 'n/a']);
        }
    }

    public function notifyAfkeurenDossierGka(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $message = new \Swift_Message();
            $message->addFrom($this->fromNotificiatieAdres);
            $message->addTo($dossier->getMedewerkerSchuldhulpbureau()->getEmail());
            $message->setSubject('Dossier afgekeurd (GKA)');
            $message->setBody('Hallo ' . $dossier->getMedewerkerSchuldhulpbureau()->getNaam() . ', ' . PHP_EOL . 'Een door jouw ingezonden dossier is door het GKA afgekeurd en bij deze teruggestuurd.' . PHP_EOL . PHP_EOL . 'Afzender: ' . $this->tokenStorage->getToken()->getUser()->getNaam() . PHP_EOL . 'Controle op: ' . date('d-m-Y') . PHP_EOL . PHP_EOL . $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailvoorlegger', ['dossierId' => $dossier->getId()], UrlGeneratorInterface::ABSOLUTE_URL));
            $this->mailer->send($message);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen medewerker schuldhulpbureau opgegeven of er is geen e-mailadres voor de medewerker van dit dossier ingevuld', ['dossierId' => $dossier->getId(), 'gebruikerId' => $dossier->getMedewerkerSchuldhulpbureau() ? $dossier->getMedewerkerSchuldhulpbureau()->getId() : 'n/a']);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.dossier_flow.completed.afkeuren_madi' => 'notifyAfkeurenMadi',
            'workflow.dossier_flow.completed.verzenden_madi' => 'notifyVerzendenMadi',
            'workflow.dossier_flow.completed.afkeuren_dossier_gka' => 'notifyAfkeurenDossierGka',
        ];
    }
}