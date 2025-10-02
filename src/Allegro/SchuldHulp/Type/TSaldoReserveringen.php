<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSaldoReserveringen implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray $SaldoReserveringen;

    /**
     * @var float
     */
    private float $Totaal;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray $SaldoReserveringen
     * @param float $Totaal
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray $SaldoReserveringen, float $Totaal)
    {
        $this->SaldoReserveringen = $SaldoReserveringen;
        $this->Totaal = $Totaal;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray
     */
    public function getSaldoReserveringen() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray
    {
        return $this->SaldoReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray $SaldoReserveringen
     * @return static
     */
    public function withSaldoReserveringen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray $SaldoReserveringen) : static
    {
        $new = clone $this;
        $new->SaldoReserveringen = $SaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaal() : float
    {
        return $this->Totaal;
    }

    /**
     * @param float $Totaal
     * @return static
     */
    public function withTotaal(float $Totaal) : static
    {
        $new = clone $this;
        $new->Totaal = $Totaal;

        return $new;
    }
}

