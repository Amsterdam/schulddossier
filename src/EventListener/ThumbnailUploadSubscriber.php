<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\FileStorageSelector;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Thumbnail;

class ThumbnailUploadSubscriber implements EventSubscriber
{
    /**
     * @var FileStorageSelector
     */
    protected $fileStorageSelector;

    /**
     * @param FileStorageSelector $fileStorageSelector
     */
    public function __construct(FileStorageSelector $fileStorageSelector)
    {
        $this->fileStorageSelector = $fileStorageSelector;
    }

    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\EventSubscriber::getSubscribedEvents()
     */
    public function getSubscribedEvents()
    {
        return ['prePersist', 'postRemove'];
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if (($object instanceof Thumbnail) === false) {
            return;
        }
        /** @var $object Thumbnail */

        $flysystem = $this->fileStorageSelector->getByGroep('thumbnail');
        $data = $object->getData();

        $object->setBestandsnaam('document-' . $object->getDocument()->getId() . '-' . uniqid(null, true) . '.' . $object->getType());

        $flysystem->write($object->getBestandsnaam(), $data);
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function postRemove(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if (($object instanceof Thumbnail) === false) {
            return;
        }
        /** @var $object Thumbnail */

        $flysystem = $this->fileStorageSelector->getByGroep('thumbnail');

        if ($flysystem->has($object->getBestandsnaam())) {
            $flysystem->delete($object->getBestandsnaam());
        }
    }
}