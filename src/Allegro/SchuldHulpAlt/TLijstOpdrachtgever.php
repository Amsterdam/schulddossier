<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TLijstOpdrachtgever
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var string $Naam
     */
    protected $Naam = null;

    /**
     * @var string $Vestigingsplaats
     */
    protected $Vestigingsplaats = null;

    /**
     * @param int $RelatieCode
     * @param string $Naam
     * @param string $Vestigingsplaats
     */
    public function __construct($RelatieCode, $Naam, $Vestigingsplaats)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Naam = $Naam;
      $this->Vestigingsplaats = $Vestigingsplaats;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TLijstOpdrachtgever
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TLijstOpdrachtgever
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
      return $this;
    }

    /**
     * @return string
     */
    public function getVestigingsplaats()
    {
      return $this->Vestigingsplaats;
    }

    /**
     * @param string $Vestigingsplaats
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TLijstOpdrachtgever
     */
    public function setVestigingsplaats($Vestigingsplaats)
    {
      $this->Vestigingsplaats = $Vestigingsplaats;
      return $this;
    }

}
