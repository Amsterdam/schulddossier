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
    private const TEST_EMAIL_ADRESSES_FILE_NAME = 'test-emails.json';

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

    private string $env;

    public function __construct(MailerInterface $mailer, $fromNotificiatieAdres, string $env, LoggerInterface $mailLogger, TokenStorageInterface $tokenStorage, UrlGeneratorInterface $urlGenerator, \Twig\Environment $twig, RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->mailer = $mailer;
        $this->fromNotificiatieAdres = $fromNotificiatieAdres;
        $this->logger = $mailLogger;
        $this->tokenStorage = $tokenStorage;
        $this->urlGenerator = $urlGenerator;
        $this->twig = $twig;
        $this->requestStack = $requestStack;
        $this->em = $em;
        $this->env = $env;
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

    public function notifyOpgevoerdShv(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        $request = $this->requestStack->getMasterRequest();

        if (!empty($request->get('voorlegger_form')['controleerGebruiker'])) {
            $this->mail($this->fromNotificiatieAdres, $request->get('voorlegger_form')['controleerGebruiker'], 'mails/notifyOpgevoerdShv.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen e-mailadres is ingevuld voor controle verzoeken aan dit schuldhulpbureau van dit dossier', ['dossierId' => $dossier->getId()]);
        }
    }

    public function notifyVerzendenShv(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getTeamGka() !== null && empty($dossier->getTeamGka()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getTeamGka()->getEmail(), 'mails/notifyVerzendenShv.html.twig', [
                'dossier' => $dossier,
                'tokenStorage' => $this->tokenStorage
            ]);
        } else {
            $this->logger->notice('Kan geen notifificatie sturen omdat er geen team is toegewezen of er geen e-mailadres is ingevuld voor het team van dit dossier', ['dossierId' => $dossier->getId(), 'teamId' => $dossier->getTeamGka() ? $dossier->getTeamGka()->getId() : 'n/a']);
        }
    }

    public function notifyGoedkeurenShv(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyGoedkeurenShv.html.twig', [
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
    public function notifyShvAboutAantekening(DossierAddedAantekeningEvent $event): void
    {
        if ($event->getDossier()->getMedewerkerSchuldhulpbureau() !== null && in_array($event->getGebruiker()->getType(), [Gebruiker::TYPE_GKA_APPBEHEERDER, Gebruiker::TYPE_GKA], true)) {
            $this->mail($this->fromNotificiatieAdres, $event->getDossier()->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyAddedAantekeningShv.html.twig', [
                'dossier' => $event->getDossier(),
                'tokenStorage' => $this->tokenStorage
            ]);
        }
    }

    public function notifyAfkeurenShv(Event $event)
    {
        /** @var $dossier Dossier */
        $dossier = $event->getSubject();

        if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
            $this->mail($this->fromNotificiatieAdres, $dossier->getMedewerkerSchuldhulpbureau()->getEmail(), 'mails/notifyAfkeurenShv.html.twig', [
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
        if ($event->getGebruiker()->getType() !== Gebruiker::TYPE_SHV) {
            return;
        }

        if (in_array($event->getDossier()->getStatus(), ['verzonden_shv', 'compleet_gka', 'dossier_gecontroleerd_gka', 'afgesloten_gka']) === false) {
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
        if ($this->env == 'acceptance' || $this->env == 'dev') {
            return $this->mailRedirectAcceptance($from, $to, $template, $data);
        }

        $message = $this->composeEmail($from, $to, $template, $data);
        $this->sendEmail($message, $from, $to);
    }

    protected function mailRedirectAcceptance($from, $to, $template, $data)
    {
        $subject = $this->twig->load($template)->renderBlock('subject', $data) . " (Acceptatie-mail. Oorspronkelijke ontvanger: $to)";

        $message = $this->composeEmail($from, $to, $template, $data);

        $message->subject($subject);
        $message->to(...$this->getTestEmailsAdresses());

        $this->sendEmail($message, $from, $to);
    }

    private function getTestEmailsAdresses()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::TEST_EMAIL_ADRESSES_FILE_NAME;
        $jsonString = file_get_contents($file);

        return json_decode($jsonString, true);
    }

    private function composeEmail($from, $to, $template, $data): Email {
        $message = new Email();
        $message->getHeaders()->addTextHeader('X-Application', 'Schuldhulp');
        $message->addFrom($from);
        $message->addTo($to);

        $message->subject($this->twig->load($template)->renderBlock('subject', $data));
        $message->html($this->twig->load($template)->renderBlock('html', $data));
        $message->text($this->twig->load($template)->renderBlock('txt', $data));

        return $message;
    }

    private function sendEmail(Email $message, $from, $to) {
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
            'workflow.dossier_flow.completed.opgevoerd_shv' => 'notifyOpgevoerdShv',
            'workflow.dossier_flow.completed.afkeuren_shv' => 'notifyAfkeurenShv',
            'workflow.dossier_flow.completed.goedkeuren_shv' => 'notifyGoedkeurenShv',
            'workflow.dossier_flow.completed.verzenden_shv' => 'notifyVerzendenShv',
            'workflow.dossier_flow.completed.afkeuren_dossier_gka' => 'notifyAfkeurenDossierGka',
            DossierChangedEvent::NAME => 'notifyChangedGka',
            DossierAddedAantekeningEvent::NAME => 'notifyShvAboutAantekening',
            DossierAddedCorrespondentie::NAME => 'notifyAboutCorrespondentie'
        ];
    }
}
