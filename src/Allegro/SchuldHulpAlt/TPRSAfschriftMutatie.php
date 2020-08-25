<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSAfschriftMutatie
{

    /**
     * @var int $VolgnummerMutatie
     */
    protected $VolgnummerMutatie = null;

    /**
     * @var int $Contractcode
     */
    protected $Contractcode = null;

    /**
     * @var int $ContractVolgnummer
     */
    protected $ContractVolgnummer = null;

    /**
     * @var \DateTime $DatumMutatie
     */
    protected $DatumMutatie = null;

    /**
     * @var boolean $IndicatieAf
     */
    protected $IndicatieAf = null;

    /**
     * @var boolean $IndicatieBij
     */
    protected $IndicatieBij = null;

    /**
     * @var float $Bedrag
     */
    protected $Bedrag = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var string $Rekeningnummer
     */
    protected $Rekeningnummer = null;

    /**
     * @var string $ExtraToelichting
     */
    protected $ExtraToelichting = null;

    /**
     * @var boolean $Reservering
     */
    protected $Reservering = null;

    /**
     * @param int $VolgnummerMutatie
     * @param int $Contractcode
     * @param int $ContractVolgnummer
     * @param \DateTime $DatumMutatie
     * @param boolean $IndicatieAf
     * @param boolean $IndicatieBij
     * @param float $Bedrag
     * @param string $Omschrijving
     * @param string $Rekeningnummer
     * @param string $ExtraToelichting
     * @param boolean $Reservering
     */
    public function __construct($VolgnummerMutatie, $Contractcode, $ContractVolgnummer, \DateTime $DatumMutatie, $IndicatieAf, $IndicatieBij, $Bedrag, $Omschrijving, $Rekeningnummer, $ExtraToelichting, $Reservering)
    {
      $this->VolgnummerMutatie = $VolgnummerMutatie;
      $this->Contractcode = $Contractcode;
      $this->ContractVolgnummer = $ContractVolgnummer;
      $this->DatumMutatie = $DatumMutatie->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setVolgnummerMutatie($VolgnummerMutatie)
    {
      $this->VolgnummerMutatie = $VolgnummerMutatie;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setContractcode($Contractcode)
    {
      $this->Contractcode = $Contractcode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setContractVolgnummer($ContractVolgnummer)
    {
      $this->ContractVolgnummer = $ContractVolgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumMutatie()
    {
      if ($this->DatumMutatie == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumMutatie);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumMutatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setDatumMutatie(\DateTime $DatumMutatie)
    {
      $this->DatumMutatie = $DatumMutatie->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieAf()
    {
      return $this->IndicatieAf;
    }

    /**
     * @param boolean $IndicatieAf
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setIndicatieAf($IndicatieAf)
    {
      $this->IndicatieAf = $IndicatieAf;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieBij()
    {
      return $this->IndicatieBij;
    }

    /**
     * @param boolean $IndicatieBij
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setIndicatieBij($IndicatieBij)
    {
      $this->IndicatieBij = $IndicatieBij;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setBedrag($Bedrag)
    {
      $this->Bedrag = $Bedrag;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setRekeningnummer($Rekeningnummer)
    {
      $this->Rekeningnummer = $Rekeningnummer;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setExtraToelichting($ExtraToelichting)
    {
      $this->ExtraToelichting = $ExtraToelichting;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReservering()
    {
      return $this->Reservering;
    }

    /**
     * @param boolean $Reservering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutatie
     */
    public function setReservering($Reservering)
    {
      $this->Reservering = $Reservering;
      return $this;
    }

}
