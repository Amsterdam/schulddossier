<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DossierDocumentNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    /**
     * @var RouterInterface
     */
    protected $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof DossierDocument;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        /** @var $object DossierDocument */
        return [
            'id' => $object->getId(),
            'onderwerp' => $object->getOnderwerp(),
            'document' => [
                'id' => $object->getDocument()->getId(),
                'bestandsnaam' => $object->getDocument()->getBestandsnaam(),
                'directory' => $object->getDocument()->getDirectory(),
                'groep' => $object->getDocument()->getGroep(),
                'mainTag' => $object->getDocument()->getMainTag(),
                'md5Hash' => $object->getDocument()->getMd5Hash(),
                'naam' => $object->getDocument()->getNaam(),
                'origineleBestandsnaam' => $object->getDocument()->getOrigineleBestandsnaam(),
                'origineleExtensie' => $object->getDocument()->getOrigineleExtensie(),
                'uploadDatumTijd' => $this->normalizer->normalize($object->getDocument()->getUploadDatumTijd(), $format, $context),
                'uploader' => $this->normalizer->normalize($object->getDocument()->getUploader(), $format, $context),
                'url' => $this->router->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_detaildocument', ['dossierId' => $object->getDossier()->getId(), 'documentId' => $object->getDocument()->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
            ]
        ];
    }

}