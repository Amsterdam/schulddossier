<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SaldoReserveringArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering>
     */
    private array $TSaldoReservering;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering> $TSaldoReservering
     */
    public function __construct(array $TSaldoReservering)
    {
        $this->TSaldoReservering = $TSaldoReservering;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering>
     */
    public function getTSaldoReservering() : array
    {
        return $this->TSaldoReservering;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering> $TSaldoReservering
     * @return static
     */
    public function withTSaldoReservering(array $TSaldoReservering) : static
    {
        $new = clone $this;
        $new->TSaldoReservering = $TSaldoReservering;

        return $new;
    }
}

