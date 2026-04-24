<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TSaldoReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SaldoReserveringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SaldoReserveringArray $SaldoReserveringen;

    /**
     * @var float
     */
    private float $Totaal;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SaldoReserveringArray
     */
    public function getSaldoReserveringen(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SaldoReserveringArray
    {
        return $this->SaldoReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SaldoReserveringArray $SaldoReserveringen
     * @return static
     */
    public function withSaldoReserveringen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SaldoReserveringArray $SaldoReserveringen): static
    {
        $new = clone $this;
        $new->SaldoReserveringen = $SaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaal(): float
    {
        return $this->Totaal;
    }

    /**
     * @param float $Totaal
     * @return static
     */
    public function withTotaal(float $Totaal): static
    {
        $new = clone $this;
        $new->Totaal = $Totaal;

        return $new;
    }
}

