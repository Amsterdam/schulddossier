<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SaldoReserveringArray implements RequestInterface
{

    /**
     * @var TSaldoReservering
     */
    private $TSaldoReservering;

    /**
     * Constructor
     *
     * @var TSaldoReservering $TSaldoReservering
     */
    public function __construct($TSaldoReservering)
    {
        $this->TSaldoReservering = $TSaldoReservering;
    }

    /**
     * @return TSaldoReservering
     */
    public function getTSaldoReservering()
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param TSaldoReservering $TSaldoReservering
     * @return SaldoReserveringArray
     */
    public function withTSaldoReservering($TSaldoReservering)
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }


}

