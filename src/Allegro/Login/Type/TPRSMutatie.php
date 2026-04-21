<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSMutatie implements RequestInterface
{
    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var int
     */
    private $ContractCode;

    /**
     * @var int
     */
    private $ContractVolgnummer;

    /**
     * @var \DateTimeInterface
     */
    private $Datum;

    /**
     * @var string
     */
    private $AfBij;

    /**
     * @var float
     */
    private $Bedrag;

    /**
     * @var int
     */
    private $VolgnummerAfschrift;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var float
     */
    private $SaldoVoor;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $UniekVolgnummer
     * @var int $ContractCode
     * @var int $ContractVolgnummer
     * @var \DateTimeInterface $Datum
     * @var string $AfBij
     * @var float $Bedrag
     * @var int $VolgnummerAfschrift
     * @var string $Omschrijving
     * @var float $SaldoVoor
     */
    public function __construct($RelatieCode, $UniekVolgnummer, $ContractCode, $ContractVolgnummer, $Datum, $AfBij, $Bedrag, $VolgnummerAfschrift, $Omschrijving, $SaldoVoor)
    {
        $this->RelatieCode = $RelatieCode;
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->ContractCode = $ContractCode;
        $this->ContractVolgnummer = $ContractVolgnummer;
        $this->Datum = $Datum;
        $this->AfBij = $AfBij;
        $this->Bedrag = $Bedrag;
        $this->VolgnummerAfschrift = $VolgnummerAfschrift;
        $this->Omschrijving = $Omschrijving;
        $this->SaldoVoor = $SaldoVoor;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TPRSMutatie
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return TPRSMutatie
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractCode()
    {
        return $this->ContractCode;
    }

    /**
     * @param int $ContractCode
     * @return TPRSMutatie
     */
    public function withContractCode($ContractCode)
    {
        $new = clone $this;
        $new->ContractCode = $ContractCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer()
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return TPRSMutatie
     */
    public function withContractVolgnummer($ContractVolgnummer)
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatum()
    {
        return $this->Datum;
    }

    /**
     * @param \DateTimeInterface $Datum
     * @return TPRSMutatie
     */
    public function withDatum($Datum)
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfBij()
    {
        return $this->AfBij;
    }

    /**
     * @param string $AfBij
     * @return TPRSMutatie
     */
    public function withAfBij($AfBij)
    {
        $new = clone $this;
        $new->AfBij = $AfBij;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedrag()
    {
        return $this->Bedrag;
    }

    /**
     * @param float $Bedrag
     * @return TPRSMutatie
     */
    public function withBedrag($Bedrag)
    {
        $new = clone $this;
        $new->Bedrag = $Bedrag;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummerAfschrift()
    {
        return $this->VolgnummerAfschrift;
    }

    /**
     * @param int $VolgnummerAfschrift
     * @return TPRSMutatie
     */
    public function withVolgnummerAfschrift($VolgnummerAfschrift)
    {
        $new = clone $this;
        $new->VolgnummerAfschrift = $VolgnummerAfschrift;

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
     * @return TPRSMutatie
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
    public function getSaldoVoor()
    {
        return $this->SaldoVoor;
    }

    /**
     * @param float $SaldoVoor
     * @return TPRSMutatie
     */
    public function withSaldoVoor($SaldoVoor)
    {
        $new = clone $this;
        $new->SaldoVoor = $SaldoVoor;

        return $new;
    }
}
