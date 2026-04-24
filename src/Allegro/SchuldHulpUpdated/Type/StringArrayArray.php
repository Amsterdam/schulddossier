<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class StringArrayArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray>
     */
    private array $StringArray;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray>
     */
    public function getStringArray(): array
    {
        return $this->StringArray;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray> $StringArray
     * @return static
     */
    public function withStringArray(array $StringArray): static
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}

