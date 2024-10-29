<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Event\PostRemoveEventArgs;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Events;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureStorage;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\FileStorageSelector;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[AsDoctrineListener(event: Events::prePersist, priority: 500, connection: 'default')]
#[AsDoctrineListener(event: Events::postRemove, priority: 500, connection: 'default')]
class DocumentUploadSubscriber implements EventSubscriberInterface
{
    /**
     * @param FileStorageSelector $fileStorageSelector
     * @param LoggerInterface $logger
     */
    public function __construct(
        protected FileStorageSelector $fileStorageSelector,
        protected LoggerInterface     $logger,
    )
    {}

    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist,
            Events::postRemove
        ];
    }

    /**
     * @param PrePersistEventArgs $args
     */
    public function prePersist(PrePersistEventArgs $args): void
    {

        $object = $args->getObject();


        if (($object instanceof Document) === false) {
            return;
        }

        if (null === $object->getFile()) {
            return;
        }

        $entityManager = $args->getObjectManager();

        /** @var Document $object */
        $flysystem = $this->fileStorageSelector->getByGroep($object->getGroep());
        /** @var $uploadedFile UploadedFile */
        $uploadedFile = $object->getFile();
        $filename = time() . '-' . $object->getMd5Hash() . '-' . uniqid(null, true) . '.';

        //making sure the filename has an extension.
        $filename .= $uploadedFile->guessExtension() ?? $uploadedFile->getClientOriginalExtension();

        $object->setOrigineleBestandsnaam($uploadedFile->getClientOriginalName());
        $object->setOrigineleExtensie($uploadedFile->getClientOriginalExtension());

        $object->setDirectory($object->getMainTag());
        $object->setBestandsnaam($filename);

        $stream = fopen($uploadedFile->getPathname(), 'r+');

        try {
            $flysystem->writeStream($object->getDirectory() . '/' . $object->getBestandsnaam(), $stream);
            fclose($stream);
        } catch (\Exception $e) {
            $this->logger->error(__CLASS__ . ":" . __METHOD__ . ": Failed to store file, errormessage: " . $e->getMessage());
        }
        catch (\Throwable $e) {
            $this->logger->error(__CLASS__ . ":" . __METHOD__ . ": Failed fclose, errormessage: " . $e->getMessage());
        }

    }

    /**
     * @param PostRemoveEventArgs $args
     *
     * @return false|void
     */
    public function postRemove(PostRemoveEventArgs $args)
    {
        $object = $args->getObject();
        if (($object instanceof Document) === false) {
            return;
        }
        /** @var $object Document */
        if ($this->service->physicalFileExists($object)) {
            $this->logger->debug(__CLASS__ . ":" . __METHOD__ . ": Removing file " . $object->getDirectory() . '/' . $object->getBestandsnaam());
            $this->service->removeFile($object);
            return;
        }

        $this->logger->debug(__CLASS__ . ":" . __METHOD__ . ": File not found: " . $object->getDirectory() . '/' . $object->getBestandsnaam());
    }
}
