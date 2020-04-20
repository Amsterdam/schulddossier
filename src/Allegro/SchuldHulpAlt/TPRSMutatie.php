<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSMutatie
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var int $UniekVolgnummer
     */
    protected $UniekVolgnummer = null;

    /**
     * @var int $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @var int $ContractVolgnummer
     */
    protected $ContractVolgnummer = null;

    /**
     * @var \DateTime $Datum
     */
    protected $Datum = null;

    /**
     * @var string $AfBij
     */
    protected $AfBij = null;

    /**
     * @var float $Bedrag
     */
    protected $Bedrag = null;

    /**
     * @var int $VolgnummerAfschrift
     */
    protected $VolgnummerAfschrift = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var float $SaldoVoor
     */
    protected $SaldoVoor = null;

    /**
     * @param int $RelatieCode
     * @param int $UniekVolgnummer
     * @param int $ContractCode
     * @param int $ContractVolgnummer
     * @param \DateTime $Datum
     * @param string $AfBij
     * @param float $Bedrag
     * @param int $VolgnummerAfschrift
     * @param string $Omschrijving
     * @param float $SaldoVoor
     */
    public function __construct($RelatieCode, $UniekVolgnummer, $ContractCode, $ContractVolgnummer, \DateTime $Datum, $AfBij, $Bedrag, $VolgnummerAfschrift, $Omschrijving, $SaldoVoor)
    {
      $this->RelatieCode = $RelatieCode;
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->ContractCode = $ContractCode;
      $this->ContractVolgnummer = $ContractVolgnummer;
      $this->Datum = $Datum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setUniekVolgnummer($UniekVolgnummer)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setContractVolgnummer($ContractVolgnummer)
    {
      $this->ContractVolgnummer = $ContractVolgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatum()
    {
      if ($this->Datum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Datum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Datum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setDatum(\DateTime $Datum)
    {
      $this->Datum = $Datum->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setAfBij($AfBij)
    {
      $this->AfBij = $AfBij;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setBedrag($Bedrag)
    {
      $this->Bedrag = $Bedrag;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setVolgnummerAfschrift($VolgnummerAfschrift)
    {
      $this->VolgnummerAfschrift = $VolgnummerAfschrift;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatie
     */
    public function setSaldoVoor($SaldoVoor)
    {
      $this->SaldoVoor = $SaldoVoor;
      return $this;
    }

}
