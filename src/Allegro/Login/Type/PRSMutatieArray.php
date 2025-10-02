<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class PRSMutatieArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSMutatie>
     */
    private array $TPRSMutatie;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSMutatie>
     */
    public function getTPRSMutatie() : array
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSMutatie> $TPRSMutatie
     * @return static
     */
    public function withTPRSMutatie(array $TPRSMutatie) : static
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }
}

