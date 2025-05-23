<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Normalizer;

use ArrayObject;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Form\FormError;

class FormErrorIteratorNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof FormErrorIterator;
    }

    public function normalize(
        $object,
        $format = null,
        array $context = []
    ): array|string|int|float|bool|ArrayObject|null {
        /** @var $object FormErrorIterator */
        $errorData = [];
        foreach ($object as $formError) {
            /** @var $formError FormError */
            $pathParts = [];
            $parent = $formError->getOrigin();
            while ($parent !== null && $parent->isRoot() === false) {
                $pathParts[] = $parent->getName();
                $parent = $parent->getParent();
            }
            $pathParts = array_reverse($pathParts);

            $fullPath = '';
            foreach ($pathParts as $pathPart) {
                $fullPath .= '[' . $pathPart . ']';
            }

            if (isset($errorData[$fullPath]) === false) {
                $errorData[$fullPath] = [];
            }
            $errorData[$fullPath][] = $formError->getMessage();
        }

        return [
            'errors' => $errorData
        ];
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            FormErrorIterator::class => false,
        ];
    }

}