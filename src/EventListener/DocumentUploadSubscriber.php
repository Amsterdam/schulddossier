<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureStorage;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\FileStorageSelector;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DocumentUploadSubscriber implements EventSubscriber
{

    /**
     * @param FileStorageSelector $fileStorageSelector
     * @param LoggerInterface $logger
     * @param AzureStorage $azureStorage
     */
    public function __construct(
        protected FileStorageSelector $fileStorageSelector,
        protected LoggerInterface     $logger,
        protected AzureStorage        $azureStorage
    )
    {}


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
        $filename = time() . '-' . $object->getMd5Hash() . '-' . uniqid(null, true) . '.' . $uploadedFile->guessExtension();

        $object->setOrigineleBestandsnaam($uploadedFile->getClientOriginalName());
        $object->setOrigineleExtensie($uploadedFile->getClientOriginalExtension());

        $object->setDirectory($object->getMainTag());
        $object->setBestandsnaam($filename);

        $stream = fopen($uploadedFile->getPathname(), 'r+');

        $this->azureStorage->storeFile($uploadedFile, $object->getMainTag(), $filename);

        try {
            fclose($stream);
        } catch (\Throwable $e) {
            $this->logger->error(__CLASS__ . ":" . __METHOD__ . ": Failed fclose, errormessage: " . $e->getMessage());
        }
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
            #$flysystem->delete($object->getDirectory() . '/' . $object->getBestandsnaam());
        }

        if ($this->azureStorage->getBlobContent($object->getDirectory() . '/' . $object->getBestandsnaam())) {
            $this->logger->debug(__CLASS__ . ":" . __METHOD__ . ": Removing file " . $object->getDirectory() . '/' . $object->getBestandsnaam());
            return $this->azureStorage->deleteFiles($object->getDirectory() . '/' . $object->getBestandsnaam());
        }

        $this->logger->debug(__CLASS__ . ":" . __METHOD__ . ": File not found: " . $object->getDirectory() . '/' . $object->getBestandsnaam());
        return false;

    }
}
