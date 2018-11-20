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

    /**
     * @var \Twig\Environment
     */
    private $twig;

    public function __construct(\Swift_Mailer $mailer, $fromNotificiatieAdres, LoggerInterface $logger, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator, \Twig\Environment $twig)
    {
        $this->mailer = $mailer;
        $this->fromNotificiatieAdres = $fromNotificiatieAdres;
        $this->logger = $logger;
        $this->tokenStorage = $tokenStorage;
        $this->urlGenerator = $urlGenerator;
        $this->twig = $twig;
    }

    public function notifyOpgevoerdMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if (empty($dossier->getSchuldhulpbureau()->getEmailAdresControle()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getSchuldhulpbureau()->getEmailAdresControle(), 'mails/notifyOpgevoerdMadi.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen e-mailadres is ingevuld voor controle verzoeken aan dit schuldhulpbureau van dit dossier', ['dossierId' => $dossier->getId()]);
        }
    }

    public function notifyVerzendenMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getTeamGka() !== null && empty($dossier->getTeamGka()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getTeamGka()->getEmail(), 'mails/notifyVerzendenMadi.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen team is toegewezen of er geen e-mailadres is ingevuld voor het team van dit dossier', ['dossierId' => $dossier->getId(), 'teamId' => $dossier->getTeamGka() ? $dossier->getTeamGka()->getId() : 'n/a']);
        }
    }
    public function notifyGoedkeurenMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyGoedkeurenMadi.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen medewerker schuldhulpbureau opgegeven of er is geen e-mailadres voor de medewerker van dit dossier ingevuld', ['dossierId' => $dossier->getId(), 'gebruikerId' => $dossier->getMedewerkerSchuldhulpbureau() ? $dossier->getMedewerkerSchuldhulpbureau()->getId() : 'n/a']);
        }
    }
    public function notifyAfkeurenMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyAfkeurenMadi.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen medewerker schuldhulpbureau opgegeven of er is geen e-mailadres voor de medewerker van dit dossier ingevuld', ['dossierId' => $dossier->getId(), 'gebruikerId' => $dossier->getMedewerkerSchuldhulpbureau() ? $dossier->getMedewerkerSchuldhulpbureau()->getId() : 'n/a']);
        }
    }

    public function notifyAfkeurenDossierGka(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyAfkeurenGka.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen medewerker schuldhulpbureau opgegeven of er is geen e-mailadres voor de medewerker van dit dossier ingevuld', ['dossierId' => $dossier->getId(), 'gebruikerId' => $dossier->getMedewerkerSchuldhulpbureau() ? $dossier->getMedewerkerSchuldhulpbureau()->getId() : 'n/a']);
        }
    }

    protected function mail($from, $to, $template, $data)
    {
        $message = new \Swift_Message();
        $message->getHeaders()->addTextHeader('X-Application', 'Schuldhulp');
        $message->addFrom($from);
        $message->addTo($to);

        $subject = $this->twig->load($template)->renderBlock('subject', $data);
        $html = $this->twig->load($template)->renderBlock('html', $data);
        $txt = $this->twig->load($template)->renderBlock('txt', $data);

        $message->setSubject($subject);
        $message->setBody($html, 'text/html');
        $message->addPart($txt, 'text/plain');

        $this->mailer->send($message);
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.dossier_flow.completed.opgevoerd_madi' => 'notifyOpgevoerdMadi',
            'workflow.dossier_flow.completed.afkeuren_madi' => 'notifyAfkeurenMadi',
            'workflow.dossier_flow.completed.goedkeuren_madi' => 'notifyGoedkeurenMadi',
            'workflow.dossier_flow.completed.verzenden_madi' => 'notifyVerzendenMadi',
            'workflow.dossier_flow.completed.afkeuren_dossier_gka' => 'notifyAfkeurenDossierGka',
        ];
    }
}