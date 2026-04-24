<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PandBerichtenArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPandBericht>
     */
    private array $TPandBericht;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPandBericht>
     */
    public function getTPandBericht(): array
    {
        return $this->TPandBericht;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPandBericht> $TPandBericht
     * @return static
     */
    public function withTPandBericht(array $TPandBericht): static
    {
        $new = clone $this;
        $new->TPandBericht = $TPandBericht;

        return $new;
    }
}

