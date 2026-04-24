<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class VariantArray
{
    /**
     * @var non-empty-array<int<0,max>, mixed>
     */
    private array $anyType;

    /**
     * @return non-empty-array<int<0,max>, mixed>
     */
    public function getAnyType(): array
    {
        return $this->anyType;
    }

    /**
     * @param non-empty-array<int<0,max>, mixed> $anyType
     * @return static
     */
    public function withAnyType(array $anyType): static
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}

