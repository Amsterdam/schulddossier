<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Form\FormErrorIterator;

class FormErrorIteratorNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof FormErrorIterator;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        /** @var $object FormErrorIterator */
        $errorData = [];
        foreach ($object as $formError) {
            /** @var $formError FormError */
            if (isset($errorData[$formError->getOrigin()->getName()]) === false) {
                $errorData[$formError->getOrigin()->getName()] = [];
            }
            $errorData[$formError->getOrigin()->getName()][] = $formError->getMessage();
        }

        return [
            'errors' => $errorData
        ];
    }

}