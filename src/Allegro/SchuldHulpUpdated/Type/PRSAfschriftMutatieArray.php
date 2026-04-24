<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PRSAfschriftMutatieArray
{
    /**
     * tbv. PRS Online Afschrift mutaties
     *
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschriftMutatie>
     */
    private array $TPRSAfschriftMutatie;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschriftMutatie>
     */
    public function getTPRSAfschriftMutatie(): array
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschriftMutatie> $TPRSAfschriftMutatie
     * @return static
     */
    public function withTPRSAfschriftMutatie(array $TPRSAfschriftMutatie): static
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }
}

