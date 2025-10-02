<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class PRSAfschriftReseveringArray
{
    /**
     * tbv. PRS Online Afschrift reserveringen
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering>
     */
    private array $TPRSAfschriftReservering;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering>
     */
    public function getTPRSAfschriftReservering() : array
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering> $TPRSAfschriftReservering
     * @return static
     */
    public function withTPRSAfschriftReservering(array $TPRSAfschriftReservering) : static
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}

