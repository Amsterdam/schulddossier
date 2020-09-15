<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSchuld
{

    /**
     * @var string $Naam
     */
    protected $Naam = null;

    /**
     * @var float $Schuld
     */
    protected $Schuld = null;

    /**
     * @var boolean $Studieschuld
     */
    protected $Studieschuld = null;

    /**
     * @var string $Referentie
     */
    protected $Referentie = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var int $CodeEiser
     */
    protected $CodeEiser = null;

    /**
     * @param string $Naam
     * @param float $Schuld
     * @param string $Omschrijving
     * @param int $CodeEiser
     */
    public function __construct($Naam, $Schuld, $Omschrijving, $CodeEiser)
    {
      $this->Naam = $Naam;
      $this->Schuld = $Schuld;
      $this->Omschrijving = $Omschrijving;
      $this->CodeEiser = $CodeEiser;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
      return $this;
    }

    /**
     * @return float
     */
    public function getSchuld()
    {
      return $this->Schuld;
    }

    /**
     * @param float $Schuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld
     */
    public function setSchuld($Schuld)
    {
      $this->Schuld = $Schuld;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStudieschuld()
    {
      return $this->Studieschuld;
    }

    /**
     * @param boolean $Studieschuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld
     */
    public function setStudieschuld($Studieschuld)
    {
      $this->Studieschuld = $Studieschuld;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferentie()
    {
      return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld
     */
    public function setReferentie($Referentie)
    {
      $this->Referentie = $Referentie;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeEiser()
    {
      return $this->CodeEiser;
    }

    /**
     * @param int $CodeEiser
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld
     */
    public function setCodeEiser($CodeEiser)
    {
      $this->CodeEiser = $CodeEiser;
      return $this;
    }

}
