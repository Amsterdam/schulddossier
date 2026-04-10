<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SaldoReserveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSaldoReservering
     */
    private $TSaldoReservering;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSaldoReservering
     */
    public function getTSaldoReservering()
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSaldoReservering $TSaldoReservering
     * @return SaldoReserveringArray
     */
    public function withTSaldoReservering($TSaldoReservering)
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }
}

