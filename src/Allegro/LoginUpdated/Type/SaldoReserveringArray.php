<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SaldoReserveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSaldoReservering
     */
    private $TSaldoReservering;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSaldoReservering
     */
    public function getTSaldoReservering()
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSaldoReservering $TSaldoReservering
     * @return SaldoReserveringArray
     */
    public function withTSaldoReservering($TSaldoReservering)
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }
}

