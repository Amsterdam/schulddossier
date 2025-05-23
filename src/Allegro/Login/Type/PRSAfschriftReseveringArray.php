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
     * @var TPRSAfschriftReservering $TPRSAfschriftReservering
     */
    public function __construct($TPRSAfschriftReservering)
    {
        $this->TPRSAfschriftReservering = $TPRSAfschriftReservering;
    }

    /**
     * @return TPRSAfschriftReservering
     */
    public function getTPRSAfschriftReservering()
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param TPRSAfschriftReservering $TPRSAfschriftReservering
     * @return PRSAfschriftReseveringArray
     */
    public function withTPRSAfschriftReservering($TPRSAfschriftReservering)
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }


}

