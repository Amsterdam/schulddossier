<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class SaldoReserveringArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering
     */
    private $TSaldoReservering;

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

