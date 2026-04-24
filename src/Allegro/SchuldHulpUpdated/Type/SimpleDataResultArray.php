<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SimpleDataResultArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDataResult>
     */
    private array $SimpleDataResult;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDataResult>
     */
    public function getSimpleDataResult(): array
    {
        return $this->SimpleDataResult;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDataResult> $SimpleDataResult
     * @return static
     */
    public function withSimpleDataResult(array $SimpleDataResult): static
    {
        $new = clone $this;
        $new->SimpleDataResult = $SimpleDataResult;

        return $new;
    }
}

