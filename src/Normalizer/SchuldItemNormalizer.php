<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use ArrayObject;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;

class SchuldItemNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof SchuldItem;
    }

    public function normalize(
        $object,
        $format = null,
        array $context = []
    ): array|string|int|float|bool|ArrayObject|null {
        /** @var $object SchuldItem */
        return [
            'id' => $object->getId(),
            'dossier' => ['id' => $object->getDossier()->getId()],
            'aanmaker' => $this->normalizer->normalize($object->getAanmaker(), $format),
            'aanmaakDatumTijd' => $this->normalizer->normalize($object->getAanmaakDatumTijd(), $format),
            'bewerker' => $this->normalizer->normalize($object->getBewerker(), $format),
            'bewerkkDatumTijd' => $this->normalizer->normalize($object->getBewerkDatumTijd(), $format),
            'verwijderd' => $object->isVerwijderd(),
            'schuldeiser' => $this->normalizer->normalize($object->getSchuldeiser(), $format),
            'incassant' => $this->normalizer->normalize($object->getIncassant(), $format),
            'referentie' => $object->getReferentie(),
            'type' => $object->getType(),
            'bedrag' => $object->getBedrag(),
            'vaststelDatum' => $this->normalizer->normalize($object->getVaststelDatum(), $format),
            'ontstaansDatum' => $this->normalizer->normalize($object->getOntstaansDatum(), $format),
            'dossierDocumenten' => $this->normalizer->normalize($object->getDossierDocumenten(), $format)
        ];
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            SchuldItem::class => false,
        ];
    }

}