<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SaldoReserveringArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSaldoReservering>
     */
    private array $TSaldoReservering;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSaldoReservering>
     */
    public function getTSaldoReservering() : array
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSaldoReservering> $TSaldoReservering
     * @return static
     */
    public function withTSaldoReservering(array $TSaldoReservering) : static
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }
}

