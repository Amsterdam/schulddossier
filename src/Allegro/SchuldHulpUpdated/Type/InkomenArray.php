<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class InkomenArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TInkomen>
     */
    private array $TInkomen;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TInkomen>
     */
    public function getTInkomen(): array
    {
        return $this->TInkomen;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TInkomen> $TInkomen
     * @return static
     */
    public function withTInkomen(array $TInkomen): static
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}

