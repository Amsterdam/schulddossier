<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TSaldoReservering
{
    /**
     * @var \DateTimeInterface
     */
    private $Datum;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var float
     */
    private $Saldo;

    /**
     * @return \DateTimeInterface
     */
    public function getDatum()
    {
        return $this->Datum;
    }

    /**
     * @param \DateTimeInterface $Datum
     * @return TSaldoReservering
     */
    public function withDatum($Datum)
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TSaldoReservering
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

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
     * @return TSaldoReservering
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
     * @return TSaldoReservering
     */
    public function withSaldo($Saldo)
    {
        $new = clone $this;
        $new->Saldo = $Saldo;

        return $new;
    }
}

