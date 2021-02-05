<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
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
        return ['prePersist', 'postRemove'];
    }

    /**
     * @param LifecycleEventArgs $args
     *
     * @throws \League\Flysystem\FileExistsException
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if (($object instanceof Document) === false) {
            return;
        }

        if (null === $object->getFile()) {
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

    /**
     * @param LifecycleEventArgs $args
     *
     * @throws \League\Flysystem\FileNotFoundException
     */
    public function postRemove(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if (($object instanceof Document) === false) {
            return;
        }
        /** @var $object Document */

        $flysystem = $this->fileStorageSelector->getByGroep($object->getGroep());

        if ($flysystem->has($object->getDirectory() . '/' . $object->getBestandsnaam())) {
            $flysystem->delete($object->getDirectory() . '/' . $object->getBestandsnaam());
        }

        $contents = $flysystem->listContents($object->getDirectory(), false);
        if (count($contents) === 0) {
            $flysystem->deleteDir($object->getDirectory());
        }
    }
}
