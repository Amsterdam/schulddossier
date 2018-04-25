<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;

class AantekeningNotificationSubscriber implements EventSubscriber
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

    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\EventSubscriber::getSubscribedEvents()
     */
    public function getSubscribedEvents()
    {
        return ['prePersist'];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        if ($this->canHandle($args->getObject())) {
            $this->mailUpdate($args->getObject());
        }
    }

    protected function canHandle($object)
    {
        return is_object($object) && $object instanceof Aantekening;
    }

    protected function mailUpdate(Aantekening $aantekening)
    {
        $dossier = $aantekening->getDossier();
        if ( in_array($dossier->getStatus(), ['verzonden_madi', 'compleet_gka', 'dossier_gecontroleerd_gka', 'afgesloten_gka']) ) {
            $notify = [];

            if ($this->tokenStorage->getToken()->getUser()->getType() !== Gebruiker::TYPE_MADI) {
                if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
                    $notify[] = $dossier->getMedewerkerSchuldhulpbureau()->getEmail();
                }
            }

            if ($this->tokenStorage->getToken()->getUser()->getType() !== Gebruiker::TYPE_GKA) {
                if ($dossier->getTeamGka() !== null && empty($dossier->getTeamGka()->getEmail()) === false) {
                    $notify[] = $dossier->getTeamGka()->getEmail();
                }
            }

            if ($this->tokenStorage->getToken()->getUser()->getType() === Gebruiker::TYPE_MADI && $this->tokenStorage->getToken()->getUser() !== $dossier->getMedewerkerSchuldhulpbureau()) {
                if ($dossier->getMedewerkerSchuldhulpbureau() !== null && empty($dossier->getMedewerkerSchuldhulpbureau()->getEmail()) === false) {
                    $notify[] = $dossier->getMedewerkerSchuldhulpbureau()->getEmail();
                }
            }
        }

        foreach ($notify as $to) {
            $message = new \Swift_Message();
            $message->addFrom($this->fromNotificiatieAdres);
            $message->addTo($to);
            $message->setSubject('Aantekening toegevoegd aan dossier');
            $message->setBody('Hallo,' . PHP_EOL . 'Er is een aantekening toegevoegd aan een dossier welke eerder is verzonden naar het GKA.' . PHP_EOL . PHP_EOL . 'Aantekening gemaakt door: ' . $this->tokenStorage->getToken()->getUser()->getNaam() . PHP_EOL . PHP_EOL . $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_detailaantekeningen', ['dossierId' => $dossier->getId()], UrlGeneratorInterface::ABSOLUTE_URL));
            $this->mailer->send($message);
        }
    }
}