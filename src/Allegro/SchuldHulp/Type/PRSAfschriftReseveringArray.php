<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftReseveringArray implements RequestInterface
{
    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering
     */
    private $TPRSAfschriftReservering;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering $TPRSAfschriftReservering
     */
    public function __construct($TPRSAfschriftReservering)
    {
        $this->TPRSAfschriftReservering = $TPRSAfschriftReservering;
    }

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
