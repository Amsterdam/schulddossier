<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\DataTransformer;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class IdToSchuldeiserTransformer implements DataTransformerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritdoc
     *
     * @param mixed $schuldeiser
     *
     * @return mixed|string
     */
    public function transform(mixed $schuldeiser): mixed
    {
        if (null === $schuldeiser) {
            return '';
        }

        return $schuldeiser->getId();
    }

    /**
     * @inheritdoc
     *
     * @param mixed $id
     *
     * @return int|null
     */
    public function reverseTransform($id): ?Schuldeiser
    {
        if (empty($id)) {
            return null;
        }

        $schuldeiser = $this->entityManager
            ->getRepository(Schuldeiser::class)
            ->find($id);

        if (null === $schuldeiser) {
            throw new TransformationFailedException(
                sprintf(
                    'An schuldeiser with number "%s" does not exist!',
                    $id
                )
            );
        }

        return $schuldeiser;
    }
}