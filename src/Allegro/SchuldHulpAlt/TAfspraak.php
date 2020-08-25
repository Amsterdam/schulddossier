<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAfspraak
{

    /**
     * @var \DateTime $StartTijdStip
     */
    protected $StartTijdStip = null;

    /**
     * @var \DateTime $EindTijdStip
     */
    protected $EindTijdStip = null;

    /**
     * @var TMedewerker $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var string $Locatie
     */
    protected $Locatie = null;

    /**
     * @var TAdres $LocatieAdres
     */
    protected $LocatieAdres = null;

    /**
     * @var string $LocatieSpreekkamer
     */
    protected $LocatieSpreekkamer = null;

    /**
     * @var string $AfspraakCode
     */
    protected $AfspraakCode = null;

    /**
     * @var string $AfspraakOmschrijving
     */
    protected $AfspraakOmschrijving = null;

    /**
     * @param \DateTime $StartTijdStip
     * @param \DateTime $EindTijdStip
     * @param TMedewerker $Medewerker
     * @param string $Locatie
     * @param TAdres $LocatieAdres
     * @param string $LocatieSpreekkamer
     * @param string $AfspraakCode
     * @param string $AfspraakOmschrijving
     */
    public function __construct(\DateTime $StartTijdStip, \DateTime $EindTijdStip, $Medewerker, $Locatie, $LocatieAdres, $LocatieSpreekkamer, $AfspraakCode, $AfspraakOmschrijving)
    {
      $this->StartTijdStip = $StartTijdStip->format(\DateTime::ATOM);
      $this->EindTijdStip = $EindTijdStip->format(\DateTime::ATOM);
      $this->Medewerker = $Medewerker;
      $this->Locatie = $Locatie;
      $this->LocatieAdres = $LocatieAdres;
      $this->LocatieSpreekkamer = $LocatieSpreekkamer;
      $this->AfspraakCode = $AfspraakCode;
      $this->AfspraakOmschrijving = $AfspraakOmschrijving;
    }

    /**
     * @return \DateTime
     */
    public function getStartTijdStip()
    {
      if ($this->StartTijdStip == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTijdStip);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTijdStip
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setStartTijdStip(\DateTime $StartTijdStip)
    {
      $this->StartTijdStip = $StartTijdStip->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEindTijdStip()
    {
      if ($this->EindTijdStip == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EindTijdStip);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EindTijdStip
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setEindTijdStip(\DateTime $EindTijdStip)
    {
      $this->EindTijdStip = $EindTijdStip->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return TMedewerker
     */
    public function getMedewerker()
    {
      return $this->Medewerker;
    }

    /**
     * @param TMedewerker $Medewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocatie()
    {
      return $this->Locatie;
    }

    /**
     * @param string $Locatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setLocatie($Locatie)
    {
      $this->Locatie = $Locatie;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getLocatieAdres()
    {
      return $this->LocatieAdres;
    }

    /**
     * @param TAdres $LocatieAdres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setLocatieAdres($LocatieAdres)
    {
      $this->LocatieAdres = $LocatieAdres;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocatieSpreekkamer()
    {
      return $this->LocatieSpreekkamer;
    }

    /**
     * @param string $LocatieSpreekkamer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setLocatieSpreekkamer($LocatieSpreekkamer)
    {
      $this->LocatieSpreekkamer = $LocatieSpreekkamer;
      return $this;
    }

    /**
     * @return string
     */
    public function getAfspraakCode()
    {
      return $this->AfspraakCode;
    }

    /**
     * @param string $AfspraakCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setAfspraakCode($AfspraakCode)
    {
      $this->AfspraakCode = $AfspraakCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAfspraakOmschrijving()
    {
      return $this->AfspraakOmschrijving;
    }

    /**
     * @param string $AfspraakOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraak
     */
    public function setAfspraakOmschrijving($AfspraakOmschrijving)
    {
      $this->AfspraakOmschrijving = $AfspraakOmschrijving;
      return $this;
    }

}
