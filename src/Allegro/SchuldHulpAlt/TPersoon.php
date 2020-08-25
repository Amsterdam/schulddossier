<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPersoon
{

    /**
     * @var string $Voornamen
     */
    protected $Voornamen = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var int $BSN
     */
    protected $BSN = null;

    /**
     * @var int $Geboortedatum
     */
    protected $Geboortedatum = null;

    /**
     * @var string $Geslacht
     */
    protected $Geslacht = null;

    /**
     * @var string $Ondernemer
     */
    protected $Ondernemer = null;

    /**
     * @var string $SoortOndernemer
     */
    protected $SoortOndernemer = null;

    /**
     * @param string $Voornamen
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param int $BSN
     * @param int $Geboortedatum
     * @param string $Geslacht
     * @param string $Ondernemer
     * @param string $SoortOndernemer
     */
    public function __construct($Voornamen, $Achternaam, $Voorvoegsels, $BSN, $Geboortedatum, $Geslacht, $Ondernemer, $SoortOndernemer)
    {
      $this->Voornamen = $Voornamen;
      $this->Achternaam = $Achternaam;
      $this->Voorvoegsels = $Voorvoegsels;
      $this->BSN = $BSN;
      $this->Geboortedatum = $Geboortedatum;
      $this->Geslacht = $Geslacht;
      $this->Ondernemer = $Ondernemer;
      $this->SoortOndernemer = $SoortOndernemer;
    }

    /**
     * @return string
     */
    public function getVoornamen()
    {
      return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setVoornamen($Voornamen)
    {
      $this->Voornamen = $Voornamen;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
      return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels()
    {
      return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
      return $this;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
      return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setBSN($BSN)
    {
      $this->BSN = $BSN;
      return $this;
    }

    /**
     * @return int
     */
    public function getGeboortedatum()
    {
      return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setGeboortedatum($Geboortedatum)
    {
      $this->Geboortedatum = $Geboortedatum;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeslacht()
    {
      return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setGeslacht($Geslacht)
    {
      $this->Geslacht = $Geslacht;
      return $this;
    }

    /**
     * @return string
     */
    public function getOndernemer()
    {
      return $this->Ondernemer;
    }

    /**
     * @param string $Ondernemer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setOndernemer($Ondernemer)
    {
      $this->Ondernemer = $Ondernemer;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoortOndernemer()
    {
      return $this->SoortOndernemer;
    }

    /**
     * @param string $SoortOndernemer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoon
     */
    public function setSoortOndernemer($SoortOndernemer)
    {
      $this->SoortOndernemer = $SoortOndernemer;
      return $this;
    }

}
