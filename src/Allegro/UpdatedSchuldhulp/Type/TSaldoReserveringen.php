<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TSaldoReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SaldoReserveringArray
     */
    private $SaldoReserveringen;

    /**
     * @var float
     */
    private $Totaal;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SaldoReserveringArray
     */
    public function getSaldoReserveringen()
    {
        return $this->SaldoReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SaldoReserveringArray $SaldoReserveringen
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

