<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SaldoReserveringArray implements RequestInterface
{
    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering
     */
    private $TSaldoReservering;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering $TSaldoReservering
     */
    public function __construct($TSaldoReservering)
    {
        $this->TSaldoReservering = $TSaldoReservering;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering
     */
    public function getTSaldoReservering()
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering $TSaldoReservering
     * @return SaldoReserveringArray
     */
    public function withTSaldoReservering($TSaldoReservering)
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }
}
