<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriftMutatie implements RequestInterface
{

    /**
     * @var int
     */
    private $VolgnummerMutatie;

    /**
     * @var int
     */
    private $Contractcode;

    /**
     * @var int
     */
    private $ContractVolgnummer;

    /**
     * @var \DateTimeInterface
     */
    private $DatumMutatie;

    /**
     * @var bool
     */
    private $IndicatieAf;

    /**
     * @var bool
     */
    private $IndicatieBij;

    /**
     * @var float
     */
    private $Bedrag;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var string
     */
    private $Rekeningnummer;

    /**
     * @var string
     */
    private $ExtraToelichting;

    /**
     * @var bool
     */
    private $Reservering;

    /**
     * Constructor
     *
     * @var int $VolgnummerMutatie
     * @var int $Contractcode
     * @var int $ContractVolgnummer
     * @var \DateTimeInterface $DatumMutatie
     * @var bool $IndicatieAf
     * @var bool $IndicatieBij
     * @var float $Bedrag
     * @var string $Omschrijving
     * @var string $Rekeningnummer
     * @var string $ExtraToelichting
     * @var bool $Reservering
     */
    public function __construct($VolgnummerMutatie, $Contractcode, $ContractVolgnummer, $DatumMutatie, $IndicatieAf, $IndicatieBij, $Bedrag, $Omschrijving, $Rekeningnummer, $ExtraToelichting, $Reservering)
    {
        $this->VolgnummerMutatie = $VolgnummerMutatie;
        $this->Contractcode = $Contractcode;
        $this->ContractVolgnummer = $ContractVolgnummer;
        $this->DatumMutatie = $DatumMutatie;
        $this->IndicatieAf = $IndicatieAf;
        $this->IndicatieBij = $IndicatieBij;
        $this->Bedrag = $Bedrag;
        $this->Omschrijving = $Omschrijving;
        $this->Rekeningnummer = $Rekeningnummer;
        $this->ExtraToelichting = $ExtraToelichting;
        $this->Reservering = $Reservering;
    }

    /**
     * @return int
     */
    public function getVolgnummerMutatie()
    {
        return $this->VolgnummerMutatie;
    }

    /**
     * @param int $VolgnummerMutatie
     * @return TPRSAfschriftMutatie
     */
    public function withVolgnummerMutatie($VolgnummerMutatie)
    {
        $new = clone $this;
        $new->VolgnummerMutatie = $VolgnummerMutatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractcode()
    {
        return $this->Contractcode;
    }

    /**
     * @param int $Contractcode
     * @return TPRSAfschriftMutatie
     */
    public function withContractcode($Contractcode)
    {
        $new = clone $this;
        $new->Contractcode = $Contractcode;

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
     * @return TPRSAfschriftMutatie
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
    public function getDatumMutatie()
    {
        return $this->DatumMutatie;
    }

    /**
     * @param \DateTimeInterface $DatumMutatie
     * @return TPRSAfschriftMutatie
     */
    public function withDatumMutatie($DatumMutatie)
    {
        $new = clone $this;
        $new->DatumMutatie = $DatumMutatie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieAf()
    {
        return $this->IndicatieAf;
    }

    /**
     * @param bool $IndicatieAf
     * @return TPRSAfschriftMutatie
     */
    public function withIndicatieAf($IndicatieAf)
    {
        $new = clone $this;
        $new->IndicatieAf = $IndicatieAf;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieBij()
    {
        return $this->IndicatieBij;
    }

    /**
     * @param bool $IndicatieBij
     * @return TPRSAfschriftMutatie
     */
    public function withIndicatieBij($IndicatieBij)
    {
        $new = clone $this;
        $new->IndicatieBij = $IndicatieBij;

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
     * @return TPRSAfschriftMutatie
     */
    public function withBedrag($Bedrag)
    {
        $new = clone $this;
        $new->Bedrag = $Bedrag;

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
     * @return TPRSAfschriftMutatie
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningnummer()
    {
        return $this->Rekeningnummer;
    }

    /**
     * @param string $Rekeningnummer
     * @return TPRSAfschriftMutatie
     */
    public function withRekeningnummer($Rekeningnummer)
    {
        $new = clone $this;
        $new->Rekeningnummer = $Rekeningnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraToelichting()
    {
        return $this->ExtraToelichting;
    }

    /**
     * @param string $ExtraToelichting
     * @return TPRSAfschriftMutatie
     */
    public function withExtraToelichting($ExtraToelichting)
    {
        $new = clone $this;
        $new->ExtraToelichting = $ExtraToelichting;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReservering()
    {
        return $this->Reservering;
    }

    /**
     * @param bool $Reservering
     * @return TPRSAfschriftMutatie
     */
    public function withReservering($Reservering)
    {
        $new = clone $this;
        $new->Reservering = $Reservering;

        return $new;
    }


}

