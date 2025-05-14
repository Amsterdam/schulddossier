<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsDoctrineListener(event: Events::prePersist, priority: 500, connection: 'default')]
#[AsDoctrineListener(event: Events::preUpdate, priority: 500, connection: 'default')]
class GebruikerPasswordSubscriber implements EventSubscriber
{
    /**
     * @param UserPasswordHasherInterface $encoder
     */
    public function __construct(
        private UserPasswordHasherInterface $encoder
    ) {
    }


    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\EventSubscriber::getSubscribedEvents()
     */
    public function getSubscribedEvents(): array
    {
        return ['prePersist', 'preUpdate'];
    }

    public function prePersist(PrePersistEventArgs $args)
    {
        if ($this->canHandle($args->getObject())) {
            $this->updatePassword($args->getObject());
        }
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        if ($this->canHandle($args->getObject())) {
            $this->updatePassword($args->getObject());
        }
    }

    protected function canHandle($object)
    {
        return is_object($object) && $object instanceof Gebruiker;
    }

    protected function updatePassword(Gebruiker $object)
    {
        if ($object->getClearPassword() !== null && $object->getClearPassword() !== '') {
            $object->setPassword($this->encoder->encodePassword($object, $object->getClearPassword()));
        }
    }
}