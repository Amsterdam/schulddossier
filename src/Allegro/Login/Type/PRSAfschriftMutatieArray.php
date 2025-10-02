<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class PRSAfschriftMutatieArray
{
    /**
     * tbv. PRS Online Afschrift mutaties
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie>
     */
    private array $TPRSAfschriftMutatie;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie>
     */
    public function getTPRSAfschriftMutatie() : array
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie> $TPRSAfschriftMutatie
     * @return static
     */
    public function withTPRSAfschriftMutatie(array $TPRSAfschriftMutatie) : static
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }
}

