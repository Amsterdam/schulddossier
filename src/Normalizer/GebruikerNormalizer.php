<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;

class GebruikerNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Gebruiker;
    }

    public function normalize(
        $object,
        $format = null,
        array $context = []
    ): array|string|int|float|bool|\ArrayObject|null {
        /** @var $object Gebruiker */
        return [
            'id' => $object->getId(),
            'naam' => $object->getNaam(),
            'roles' => $object->getRoles(),
            'type' => $object->getType(),
            'username' => $object->getUsername()
        ];
    }

}