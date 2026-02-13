<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftReseveringArray implements RequestInterface
{
    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering
     */
    private $TPRSAfschriftReservering;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering $TPRSAfschriftReservering
     */
    public function __construct($TPRSAfschriftReservering)
    {
        $this->TPRSAfschriftReservering = $TPRSAfschriftReservering;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering
     */
    public function getTPRSAfschriftReservering()
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering $TPRSAfschriftReservering
     * @return PRSAfschriftReseveringArray
     */
    public function withTPRSAfschriftReservering($TPRSAfschriftReservering)
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}
