<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriftReservering implements RequestInterface
{
    /**
     * @var int
     */
    private int $VolgnummerReservering;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * Het saldo van de reservering op datum vervaardiging afschrift.
     *
     * @var float
     */
    private float $Saldo;

    /**
     * Constructor
     *
     * @param int $VolgnummerReservering
     * @param string $Omschrijving
     * @param float $Saldo
     */
    public function __construct(int $VolgnummerReservering, string $Omschrijving, float $Saldo)
    {
        $this->VolgnummerReservering = $VolgnummerReservering;
        $this->Omschrijving = $Omschrijving;
        $this->Saldo = $Saldo;
    }

    /**
     * @return int
     */
    public function getVolgnummerReservering() : int
    {
        return $this->VolgnummerReservering;
    }

    /**
     * @param int $VolgnummerReservering
     * @return static
     */
    public function withVolgnummerReservering(int $VolgnummerReservering) : static
    {
        $new = clone $this;
        $new->VolgnummerReservering = $VolgnummerReservering;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldo() : float
    {
        return $this->Saldo;
    }

    /**
     * @param float $Saldo
     * @return static
     */
    public function withSaldo(float $Saldo) : static
    {
        $new = clone $this;
        $new->Saldo = $Saldo;

        return $new;
    }
}

