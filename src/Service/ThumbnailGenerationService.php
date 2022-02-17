<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use GuzzleHttp\Client;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Thumbnail;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class ThumbnailGenerationService implements EventSubscriberInterface
{
    private $queue;

    private $swiftContainerPrefix;

    private $swiftTempUrlKey;

    private $swiftPublicUrl;

    private $em;

    private $serviceUrl;
    
    private $logger;

    public function __construct($swiftContainerPrefix, $swiftTempUrlKey, $swiftPublicUrl, EntityManagerInterface $em, $serviceUrl, LoggerInterface $logger)
    {
        $this->swiftContainerPrefix = $swiftContainerPrefix;
        $this->swiftTempUrlKey = $swiftTempUrlKey;
        $this->swiftPublicUrl = $swiftPublicUrl;

        $this->em = $em;

        $this->serviceUrl = $serviceUrl;

        $this->queue = [];
        
        $this->logger = $logger;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::TERMINATE => ['onKernelTerminate'],
        ];
    }

    public function push(Document $document)
    {
        $this->queue[] = $document;
    }

    public function onKernelTerminate(PostResponseEvent $event)
    {
        foreach ($this->queue as $document) {
            $this->generateThumbnail($document);
        }
    }

    public function generateThumbnail(Document $document)
    {
        $timestamp = intval(time() + 60);
        $path = '/' . $this->swiftContainerPrefix . $document->getGroep() . '/' . $document->getDirectory() . '/' . $document->getBestandsnaam();
        $sign = hash_hmac('sha1', "GET\n" . $timestamp . "\n" . $path, $this->swiftTempUrlKey);
        $fullUrl = $this->swiftPublicUrl . $path . '?temp_url_sig=' . $sign . '&temp_url_expires=' . $timestamp;

        if (in_array($document->getOrigineleExtensie(), ['pdf', 'doc', 'docx']) === false) {
            return;
        }
        
        $inputType = in_array($document->getOrigineleExtensie(), ['doc', 'docx']) ? 'docx' : 'pdf';

        $client = new Client();
        $this->logger->info('Call thumbnail service', ['inputType' => $inputType, 'url' => $fullUrl]);
        $response = $client->post($this->serviceUrl . '1/generate', [
            'form_params' => [
                'url' => $fullUrl,
                'width' => 300,
                'height' => 200,
                'inputType' => $inputType,
                'outputType' => 'png',
            ]
        ]);
        $data = json_decode((string) $response->getBody(), true);

        $thumbnail = new Thumbnail();
        $thumbnail->setData(base64_decode($data['result']));
        $thumbnail->setType('png');
        $document->addThumbnail($thumbnail);

        $this->em->persist($thumbnail);
        $this->em->flush($thumbnail);
    }
}