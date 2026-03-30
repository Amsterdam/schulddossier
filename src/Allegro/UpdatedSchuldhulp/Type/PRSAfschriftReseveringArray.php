<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PRSAfschriftReseveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschriftReservering
     */
    private $TPRSAfschriftReservering;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschriftReservering
     */
    public function getTPRSAfschriftReservering()
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschriftReservering $TPRSAfschriftReservering
     * @return PRSAfschriftReseveringArray
     */
    public function withTPRSAfschriftReservering($TPRSAfschriftReservering)
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}

