<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PRSAfschriftReseveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschriftReservering
     */
    private $TPRSAfschriftReservering;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschriftReservering
     */
    public function getTPRSAfschriftReservering()
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschriftReservering $TPRSAfschriftReservering
     * @return PRSAfschriftReseveringArray
     */
    public function withTPRSAfschriftReservering($TPRSAfschriftReservering)
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}

