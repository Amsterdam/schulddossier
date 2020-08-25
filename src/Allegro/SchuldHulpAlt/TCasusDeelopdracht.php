<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusDeelopdracht
{

    /**
     * @var int $VolgnummerCasus
     */
    protected $VolgnummerCasus = null;

    /**
     * @var int $VolgnummerKlantopdracht
     */
    protected $VolgnummerKlantopdracht = null;

    /**
     * @var string $ToelichtingKlantopdracht
     */
    protected $ToelichtingKlantopdracht = null;

    /**
     * @var int $VolgnummerDeelopdracht
     */
    protected $VolgnummerDeelopdracht = null;

    /**
     * @var string $Naam
     */
    protected $Naam = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var string $RubriekSoort
     */
    protected $RubriekSoort = null;

    /**
     * @var string $RubriekNaam
     */
    protected $RubriekNaam = null;

    /**
     * @var string $Toelichting
     */
    protected $Toelichting = null;

    /**
     * @var \DateTime $Startdatum
     */
    protected $Startdatum = null;

    /**
     * @var \DateTime $DatumUiterlijk
     */
    protected $DatumUiterlijk = null;

    /**
     * @var \DateTime $DatumUitgevoerd
     */
    protected $DatumUitgevoerd = null;

    /**
     * @var \DateTime $DatumNietUitgevoerd
     */
    protected $DatumNietUitgevoerd = null;

    /**
     * @var string $NaamLang
     */
    protected $NaamLang = null;

    /**
     * @param int $VolgnummerCasus
     * @param int $VolgnummerKlantopdracht
     * @param string $ToelichtingKlantopdracht
     * @param int $VolgnummerDeelopdracht
     * @param string $Naam
     * @param string $Omschrijving
     * @param string $RubriekSoort
     * @param string $RubriekNaam
     * @param string $Toelichting
     * @param \DateTime $Startdatum
     * @param \DateTime $DatumUiterlijk
     * @param \DateTime $DatumUitgevoerd
     * @param \DateTime $DatumNietUitgevoerd
     * @param string $NaamLang
     */
    public function __construct($VolgnummerCasus, $VolgnummerKlantopdracht, $ToelichtingKlantopdracht, $VolgnummerDeelopdracht, $Naam, $Omschrijving, $RubriekSoort, $RubriekNaam, $Toelichting, \DateTime $Startdatum, \DateTime $DatumUiterlijk, \DateTime $DatumUitgevoerd, \DateTime $DatumNietUitgevoerd, $NaamLang)
    {
      $this->VolgnummerCasus = $VolgnummerCasus;
      $this->VolgnummerKlantopdracht = $VolgnummerKlantopdracht;
      $this->ToelichtingKlantopdracht = $ToelichtingKlantopdracht;
      $this->VolgnummerDeelopdracht = $VolgnummerDeelopdracht;
      $this->Naam = $Naam;
      $this->Omschrijving = $Omschrijving;
      $this->RubriekSoort = $RubriekSoort;
      $this->RubriekNaam = $RubriekNaam;
      $this->Toelichting = $Toelichting;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      $this->DatumUiterlijk = $DatumUiterlijk->format(\DateTime::ATOM);
      $this->DatumUitgevoerd = $DatumUitgevoerd->format(\DateTime::ATOM);
      $this->DatumNietUitgevoerd = $DatumNietUitgevoerd->format(\DateTime::ATOM);
      $this->NaamLang = $NaamLang;
    }

    /**
     * @return int
     */
    public function getVolgnummerCasus()
    {
      return $this->VolgnummerCasus;
    }

    /**
     * @param int $VolgnummerCasus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setVolgnummerCasus($VolgnummerCasus)
    {
      $this->VolgnummerCasus = $VolgnummerCasus;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummerKlantopdracht()
    {
      return $this->VolgnummerKlantopdracht;
    }

    /**
     * @param int $VolgnummerKlantopdracht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setVolgnummerKlantopdracht($VolgnummerKlantopdracht)
    {
      $this->VolgnummerKlantopdracht = $VolgnummerKlantopdracht;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichtingKlantopdracht()
    {
      return $this->ToelichtingKlantopdracht;
    }

    /**
     * @param string $ToelichtingKlantopdracht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setToelichtingKlantopdracht($ToelichtingKlantopdracht)
    {
      $this->ToelichtingKlantopdracht = $ToelichtingKlantopdracht;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummerDeelopdracht()
    {
      return $this->VolgnummerDeelopdracht;
    }

    /**
     * @param int $VolgnummerDeelopdracht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setVolgnummerDeelopdracht($VolgnummerDeelopdracht)
    {
      $this->VolgnummerDeelopdracht = $VolgnummerDeelopdracht;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
      return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return string
     */
    public function getRubriekSoort()
    {
      return $this->RubriekSoort;
    }

    /**
     * @param string $RubriekSoort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setRubriekSoort($RubriekSoort)
    {
      $this->RubriekSoort = $RubriekSoort;
      return $this;
    }

    /**
     * @return string
     */
    public function getRubriekNaam()
    {
      return $this->RubriekNaam;
    }

    /**
     * @param string $RubriekNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setRubriekNaam($RubriekNaam)
    {
      $this->RubriekNaam = $RubriekNaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichting()
    {
      return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setToelichting($Toelichting)
    {
      $this->Toelichting = $Toelichting;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdatum()
    {
      if ($this->Startdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Startdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Startdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumUiterlijk()
    {
      if ($this->DatumUiterlijk == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumUiterlijk);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumUiterlijk
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setDatumUiterlijk(\DateTime $DatumUiterlijk)
    {
      $this->DatumUiterlijk = $DatumUiterlijk->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumUitgevoerd()
    {
      if ($this->DatumUitgevoerd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumUitgevoerd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumUitgevoerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setDatumUitgevoerd(\DateTime $DatumUitgevoerd)
    {
      $this->DatumUitgevoerd = $DatumUitgevoerd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumNietUitgevoerd()
    {
      if ($this->DatumNietUitgevoerd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumNietUitgevoerd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumNietUitgevoerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setDatumNietUitgevoerd(\DateTime $DatumNietUitgevoerd)
    {
      $this->DatumNietUitgevoerd = $DatumNietUitgevoerd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getNaamLang()
    {
      return $this->NaamLang;
    }

    /**
     * @param string $NaamLang
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusDeelopdracht
     */
    public function setNaamLang($NaamLang)
    {
      $this->NaamLang = $NaamLang;
      return $this;
    }

}
