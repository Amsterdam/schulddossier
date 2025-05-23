<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use DateTime;
use ArrayObject;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;

class DateTimeNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof DateTime;
    }

    public function normalize(
        $object,
        $format = null,
        array $context = []
    ): array|string|int|float|bool|ArrayObject|null {
        /** @var $object \DateTime */
        return [
            'timestamp' => $object->format('U'),
            'iso8601' => $object->format('c'),
            'rfc2822' => $object->format('r'),
        ];
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            DateTime::class => true,
        ];
    }

}