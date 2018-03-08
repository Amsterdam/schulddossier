<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use League\Flysystem\Filesystem;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\FileStorageSelector;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DocumentUploadSubscriber implements EventSubscriber
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
        return ['prePersist'];
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if (($object instanceof Document) === false) {
            return;
        }
        /** @var $object Document */

        $flysystem = $this->fileStorageSelector->getByGroep($object->getGroep());
        /** @var $uploadedFile UploadedFile */
        $uploadedFile = $object->getFile();

        $object->setOrigineleBestandsnaam($uploadedFile->getClientOriginalName());
        $object->setOrigineleExtensie($uploadedFile->getClientOriginalExtension());

        $object->setDirectory($object->getMainTag());
        $object->setBestandsnaam(time() . '-' . $object->getMd5Hash() . '-' . uniqid(null, true) . '.' . $uploadedFile->guessExtension());

        $stream = fopen($uploadedFile->getPathname(), 'r+');
        $flysystem->writeStream($object->getDirectory() . '/' . $object->getBestandsnaam(), $stream);
        fclose($stream);
    }
}