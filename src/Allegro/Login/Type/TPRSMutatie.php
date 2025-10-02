<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSMutatie
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var int
     */
    private int $UniekVolgnummer;

    /**
     * @var int
     */
    private int $ContractCode;

    /**
     * @var int
     */
    private int $ContractVolgnummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Datum;

    /**
     * @var string
     */
    private string $AfBij;

    /**
     * @var float
     */
    private float $Bedrag;

    /**
     * @var int
     */
    private int $VolgnummerAfschrift;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var float
     */
    private float $SaldoVoor;

    /**
     * @return int
     */
    public function getRelatieCode() : int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode) : static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer() : int
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return static
     */
    public function withUniekVolgnummer(int $UniekVolgnummer) : static
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractCode() : int
    {
        return $this->ContractCode;
    }

    /**
     * @param int $ContractCode
     * @return static
     */
    public function withContractCode(int $ContractCode) : static
    {
        $new = clone $this;
        $new->ContractCode = $ContractCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer() : int
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return static
     */
    public function withContractVolgnummer(int $ContractVolgnummer) : static
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
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
     * @return string
     */
    public function getAfBij() : string
    {
        return $this->AfBij;
    }

    /**
     * @param string $AfBij
     * @return static
     */
    public function withAfBij(string $AfBij) : static
    {
        $new = clone $this;
        $new->AfBij = $AfBij;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedrag() : float
    {
        return $this->Bedrag;
    }

    /**
     * @param float $Bedrag
     * @return static
     */
    public function withBedrag(float $Bedrag) : static
    {
        $new = clone $this;
        $new->Bedrag = $Bedrag;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummerAfschrift() : int
    {
        return $this->VolgnummerAfschrift;
    }

    /**
     * @param int $VolgnummerAfschrift
     * @return static
     */
    public function withVolgnummerAfschrift(int $VolgnummerAfschrift) : static
    {
        $new = clone $this;
        $new->VolgnummerAfschrift = $VolgnummerAfschrift;

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
    public function getSaldoVoor() : float
    {
        return $this->SaldoVoor;
    }

    /**
     * @param float $SaldoVoor
     * @return static
     */
    public function withSaldoVoor(float $SaldoVoor) : static
    {
        $new = clone $this;
        $new->SaldoVoor = $SaldoVoor;

        return $new;
    }
}

