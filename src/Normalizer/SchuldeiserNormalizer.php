<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;

class SchuldeiserNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof Schuldeiser;
    }

    public function normalize(
        $object,
        $format = null,
        array $context = []
    ): array|string|int|float|bool|\ArrayObject|null {
        /** @var $object Schuldeiser */
        return [
            'id' => $object->getId(),
            'bedrijfsnaam' => $object->getBedrijfsnaam(),
            'allegroCode' => $object->getAllegroCode(),
            'rekening' => $object->getRekening(),
            'straat' => $object->getStraat(),
            'huisnummer' => $object->getHuisnummer(),
            'huisnummerToevoeging' => $object->getHuisnummerToevoeging(),
            'postcode' => $object->getPostcode(),
            'plaats' => $object->getPlaats(),
        ];
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            Schuldeiser::class => false,
        ];
    }

}