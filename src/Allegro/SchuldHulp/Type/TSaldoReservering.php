<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSaldoReservering implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Datum;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var float
     */
    private float $Saldo;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $Datum
     * @param int $Volgnummer
     * @param string $Omschrijving
     * @param float $Saldo
     */
    public function __construct(\DateTimeInterface $Datum, int $Volgnummer, string $Omschrijving, float $Saldo)
    {
        $this->Datum = $Datum;
        $this->Volgnummer = $Volgnummer;
        $this->Omschrijving = $Omschrijving;
        $this->Saldo = $Saldo;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatum() : \DateTimeInterface
    {
        return $this->Datum;
    }

    /**
     * @param \DateTimeInterface $Datum
     * @return static
     */
    public function withDatum(\DateTimeInterface $Datum) : static
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

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

