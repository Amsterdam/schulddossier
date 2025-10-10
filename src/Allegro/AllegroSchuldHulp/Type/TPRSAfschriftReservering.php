<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TPRSAfschriftReservering
{
    /**
     * @var int
     */
    private $VolgnummerReservering;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var float
     */
    private $Saldo;

    /**
     * @return int
     */
    public function getVolgnummerReservering()
    {
        return $this->VolgnummerReservering;
    }

    /**
     * @param int $VolgnummerReservering
     * @return TPRSAfschriftReservering
     */
    public function withVolgnummerReservering($VolgnummerReservering)
    {
        $new = clone $this;
        $new->VolgnummerReservering = $VolgnummerReservering;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return TPRSAfschriftReservering
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldo()
    {
        return $this->Saldo;
    }

    /**
     * @param float $Saldo
     * @return TPRSAfschriftReservering
     */
    public function withSaldo($Saldo)
    {
        $new = clone $this;
        $new->Saldo = $Saldo;

        return $new;
    }
}

