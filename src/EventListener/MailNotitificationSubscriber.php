<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierAddedAantekeningEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierAddedCorrespondentie;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierChangedEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Workflow\Event\Event;

class MailNotitificationSubscriber implements EventSubscriberInterface
{
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

    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct(MailerInterface $mailer, $fromNotificiatieAdres, LoggerInterface $mailLogger, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator, \Twig\Environment $twig, RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->mailer = $mailer;
        $this->fromNotificiatieAdres = $fromNotificiatieAdres;
        $this->logger = $mailLogger;
        $this->tokenStorage = $tokenStorage;
        $this->urlGenerator = $urlGenerator;
        $this->twig = $twig;
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    /**
     * @param DossierAddedCorrespondentie $event
     */
    public function notifyAboutCorrespondentie(DossierAddedCorrespondentie $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getDossier();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && !empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail())) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyAboutCorrespondentie.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen e-mailadres is ingevuld voor het de behandelaar van dit dossier', ['dossierId' => $dossier->getId(), 'teamId' => $dossier->getTeamGka() ? $dossier->getTeamGka()->getId() : 'n/a']);
        }
    }

    public function notifyOpgevoerdMadi(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        $request = $this->requestStack->getMasterRequest();

        if (!empty($request->get('voorlegger_form')['controleerGebruiker'])) {
            $this->mail($this->fromNotificiatieAdres, $request->get('voorlegger_form')['controleerGebruiker'], 'mails/notifyOpgevoerdMadi.html.twig', [
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

    /**
     * @param DossierAddedAantekeningEvent $event
     */
    public function notifyMadiAboutAantekening(DossierAddedAantekeningEvent $event): void
    {
        if ($event->getDossier()->getMedewerkerSchuldhulpbureau() !== null && in_array($event->getGebruiker()->getType(), [Gebruiker::TYPE_GKA_APPBEHEERDER, Gebruiker::TYPE_GKA], true)) {
            $this->mail($this->fromNotificiatieAdres, $event->getDossier()->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyAddedAantekeningMadi.html.twig', [
                'dossier' => $event->getDossier(),
                'tokenStorage' => $this->tokenStorage
            ]);
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

    public function notifyChangedGka(DossierChangedEvent $event)
    {
        if ($event->getGebruiker()->getType() !== Gebruiker::TYPE_MADI) {
            return;
        }

        if (in_array($event->getDossier()->getStatus(), ['verzonden_madi', 'compleet_gka', 'dossier_gecontroleerd_gka', 'afgesloten_gka']) === false) {
            return;
        }

        if ($event->getDossier()->getTeamGka() !== null && empty($event->getDossier()->getTeamGka()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $event->getDossier()->getTeamGka()->getEmail(), 'mails/notifyChangedGka.html.twig', [
                'dossier' => $event->getDossier(),
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen team is toegewezen of er geen e-mailadres is ingevuld voor het team van dit dossier', ['dossierId' => $event->getDossier()->getId(), 'teamId' => $event->getDossier()->getTeamGka() ? $event->getDossier()->getTeamGka()->getId() : 'n/a']);
        }
    }

    protected function mail($from, $to, $template, $data)
    {
        $message = new Email();
        $message->getHeaders()->addTextHeader('X-Application', 'Schuldhulp');
        $message->addFrom($from);
        $message->addTo($to);

        $message->subject($this->twig->load($template)->renderBlock('subject', $data));
        $message->html($this->twig->load($template)->renderBlock('html', $data));
        $message->text($this->twig->load($template)->renderBlock('txt', $data));

        try {
            $this->logger->info('Mail: start sending', ['from' => $from, 'to' => $to, 'subject' => $message->getSubject()]);
            $this->mailer->send($message);
            $this->logger->info('Mail: successfully send', ['from' => $from, 'to' => $to, 'subject' => $message->getSubject()]);
        } catch (TransportExceptionInterface $e) {
            $this->logger->error('Mail: send failure', ['exception' => get_class($e), 'reason' => $e->getMessage(), 'from' => $from, 'to' => $to, 'subject' => $message->getSubject()]);
            throw $e;
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.dossier_flow.completed.opgevoerd_madi' => 'notifyOpgevoerdMadi',
            'workflow.dossier_flow.completed.afkeuren_madi' => 'notifyAfkeurenMadi',
            'workflow.dossier_flow.completed.goedkeuren_madi' => 'notifyGoedkeurenMadi',
            'workflow.dossier_flow.completed.verzenden_madi' => 'notifyVerzendenMadi',
            'workflow.dossier_flow.completed.afkeuren_dossier_gka' => 'notifyAfkeurenDossierGka',
            DossierChangedEvent::NAME => 'notifyChangedGka',
            DossierAddedAantekeningEvent::NAME => 'notifyMadiAboutAantekening',
            DossierAddedCorrespondentie::NAME => 'notifyAboutCorrespondentie'
        ];
    }
}
