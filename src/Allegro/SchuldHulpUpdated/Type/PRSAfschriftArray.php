<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PRSAfschriftArray
{
    /**
     * Tbv. PRS Online Afschriften
     *
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschrift>
     */
    private array $TPRSAfschrift;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschrift>
     */
    public function getTPRSAfschrift(): array
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschrift> $TPRSAfschrift
     * @return static
     */
    public function withTPRSAfschrift(array $TPRSAfschrift): static
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

