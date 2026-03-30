<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SaldoReserveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSaldoReservering
     */
    private $TSaldoReservering;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSaldoReservering
     */
    public function getTSaldoReservering()
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSaldoReservering $TSaldoReservering
     * @return SaldoReserveringArray
     */
    public function withTSaldoReservering($TSaldoReservering)
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }
}

