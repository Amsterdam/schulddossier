<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;

class SchuldeiserNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Schuldeiser;
    }

    public function normalize($object, $format = null, array $context = [])
    {
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

}