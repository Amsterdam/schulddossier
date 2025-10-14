<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class PRSAfschriftReseveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering
     */
    private $TPRSAfschriftReservering;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering
     */
    public function getTPRSAfschriftReservering()
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering $TPRSAfschriftReservering
     * @return PRSAfschriftReseveringArray
     */
    public function withTPRSAfschriftReservering($TPRSAfschriftReservering)
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}

