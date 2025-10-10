<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TSaldoReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray
     */
    private $SaldoReserveringen;

    /**
     * @var float
     */
    private $Totaal;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray
     */
    public function getSaldoReserveringen()
    {
        return $this->SaldoReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray $SaldoReserveringen
     * @return TSaldoReserveringen
     */
    public function withSaldoReserveringen($SaldoReserveringen)
    {
        $new = clone $this;
        $new->SaldoReserveringen = $SaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaal()
    {
        return $this->Totaal;
    }

    /**
     * @param float $Totaal
     * @return TSaldoReserveringen
     */
    public function withTotaal($Totaal)
    {
        $new = clone $this;
        $new->Totaal = $Totaal;

        return $new;
    }
}

