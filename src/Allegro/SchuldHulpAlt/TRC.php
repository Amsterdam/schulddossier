<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRC
{

    /**
     * @var TRCHeader $InfoHeader
     */
    protected $InfoHeader = null;

    /**
     * @var string $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var int $Rentecode
     */
    protected $Rentecode = null;

    /**
     * @var string $RentecodeOmschrijving
     */
    protected $RentecodeOmschrijving = null;

    /**
     * @var \DateTime $TabelIngangsdatum
     */
    protected $TabelIngangsdatum = null;

    /**
     * @var float $RentepercentagePositief
     */
    protected $RentepercentagePositief = null;

    /**
     * @var float $RentepercentageNegatief
     */
    protected $RentepercentageNegatief = null;

    /**
     * @var RCJaarrenteArray $Jaarrente
     */
    protected $Jaarrente = null;

    /**
     * @param TRCHeader $InfoHeader
     * @param string $Medewerker
     * @param int $Rentecode
     * @param string $RentecodeOmschrijving
     * @param \DateTime $TabelIngangsdatum
     * @param float $RentepercentagePositief
     * @param float $RentepercentageNegatief
     * @param RCJaarrenteArray $Jaarrente
     */
    public function __construct($InfoHeader, $Medewerker, $Rentecode, $RentecodeOmschrijving, \DateTime $TabelIngangsdatum, $RentepercentagePositief, $RentepercentageNegatief, $Jaarrente)
    {
      $this->InfoHeader = $InfoHeader;
      $this->Medewerker = $Medewerker;
      $this->Rentecode = $Rentecode;
      $this->RentecodeOmschrijving = $RentecodeOmschrijving;
      $this->TabelIngangsdatum = $TabelIngangsdatum->format(\DateTime::ATOM);
      $this->RentepercentagePositief = $RentepercentagePositief;
      $this->RentepercentageNegatief = $RentepercentageNegatief;
      $this->Jaarrente = $Jaarrente;
    }

    /**
     * @return TRCHeader
     */
    public function getInfoHeader()
    {
      return $this->InfoHeader;
    }

    /**
     * @param TRCHeader $InfoHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setInfoHeader($InfoHeader)
    {
      $this->InfoHeader = $InfoHeader;
      return $this;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
      return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return int
     */
    public function getRentecode()
    {
      return $this->Rentecode;
    }

    /**
     * @param int $Rentecode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setRentecode($Rentecode)
    {
      $this->Rentecode = $Rentecode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRentecodeOmschrijving()
    {
      return $this->RentecodeOmschrijving;
    }

    /**
     * @param string $RentecodeOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setRentecodeOmschrijving($RentecodeOmschrijving)
    {
      $this->RentecodeOmschrijving = $RentecodeOmschrijving;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTabelIngangsdatum()
    {
      if ($this->TabelIngangsdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TabelIngangsdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TabelIngangsdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setTabelIngangsdatum(\DateTime $TabelIngangsdatum)
    {
      $this->TabelIngangsdatum = $TabelIngangsdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getRentepercentagePositief()
    {
      return $this->RentepercentagePositief;
    }

    /**
     * @param float $RentepercentagePositief
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setRentepercentagePositief($RentepercentagePositief)
    {
      $this->RentepercentagePositief = $RentepercentagePositief;
      return $this;
    }

    /**
     * @return float
     */
    public function getRentepercentageNegatief()
    {
      return $this->RentepercentageNegatief;
    }

    /**
     * @param float $RentepercentageNegatief
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setRentepercentageNegatief($RentepercentageNegatief)
    {
      $this->RentepercentageNegatief = $RentepercentageNegatief;
      return $this;
    }

    /**
     * @return RCJaarrenteArray
     */
    public function getJaarrente()
    {
      return $this->Jaarrente;
    }

    /**
     * @param RCJaarrenteArray $Jaarrente
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRC
     */
    public function setJaarrente($Jaarrente)
    {
      $this->Jaarrente = $Jaarrente;
      return $this;
    }

}
