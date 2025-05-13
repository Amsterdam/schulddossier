<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class GebruikerPasswordSubscriber implements EventSubscriber
{
    /**
     * @param UserPasswordHasherInterface $encoder
     */
    public function __construct(
        private UserPasswordHasherInterface  $encoder
    ){}


    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\EventSubscriber::getSubscribedEvents()
     */
    public function getSubscribedEvents(): array
    {
        return ['prePersist', 'preUpdate'];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        if ($this->canHandle($args->getObject())) {
            $this->updatePassword($args->getObject());
        }
    }

    public function preUpdate(LifecycleEventArgs $args)
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