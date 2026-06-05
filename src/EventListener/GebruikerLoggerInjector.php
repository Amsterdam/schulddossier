<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PostLoadEventArgs;
use Psr\Log\LoggerInterface;

#[AsDoctrineListener(event: Events::postLoad)]
class GebruikerLoggerInjector
{
    public function __construct(private LoggerInterface $logger) {}

    public function postLoad(PostLoadEventArgs $args): void
    {
        $entity = $args->getObject();

        if (!$entity instanceof Gebruiker) {
            return;
        }

        $entity->setLogger($this->logger);
    }
}