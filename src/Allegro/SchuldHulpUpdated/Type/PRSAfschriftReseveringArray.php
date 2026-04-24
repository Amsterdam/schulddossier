<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PRSAfschriftReseveringArray
{
    /**
     * tbv. PRS Online Afschrift reserveringen
     *
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschriftReservering>
     */
    private array $TPRSAfschriftReservering;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschriftReservering>
     */
    public function getTPRSAfschriftReservering(): array
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschriftReservering> $TPRSAfschriftReservering
     * @return static
     */
    public function withTPRSAfschriftReservering(array $TPRSAfschriftReservering): static
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}

