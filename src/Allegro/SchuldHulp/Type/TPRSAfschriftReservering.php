<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriftReservering implements RequestInterface
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
     * Constructor
     *
     * @var int $VolgnummerReservering
     * @var string $Omschrijving
     * @var float $Saldo
     */
    public function __construct($VolgnummerReservering, $Omschrijving, $Saldo)
    {
        $this->VolgnummerReservering = $VolgnummerReservering;
        $this->Omschrijving = $Omschrijving;
        $this->Saldo = $Saldo;
    }

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
