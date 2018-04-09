<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Workflow\Event\Event;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierTimeline;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class MailNotitificationSubscriber implements EventSubscriberInterface
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var string
     */
    private $gkaNotificiatieAdres;

    public function __construct(\Swift_Mailer $mailer, $gkaNotificiatieAdres)
    {
        $this->mailer = $mailer;
        $this->gkaNotificiatieAdres = $gkaNotificiatieAdres;
    }

    public function notifyGka(Event $event)
    {
        $message = new \Swift_Message();
        $message->addFrom('test@markei.nl');
        $message->addTo($this->gkaNotificiatieAdres);
        $message->setSubject('Dossier overgedragen naar het GKA');
        $message->setBody('Dossier: ' . $event->getSubject()->getId() . ' / Client: ' . $event->getSubject()->getClientNaam());

        $this->mailer->send($message);
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.dossier_flow.completed.verzenden_madi' => 'notifyGka',
            //'workflow.dossier_flow.completed.gestart_gka' => 'notifyMadi',
        ];
    }
}