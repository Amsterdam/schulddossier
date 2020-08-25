<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TOrganisatie
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
     * @var TAdres $BezoekAdres
     */
    protected $BezoekAdres = null;

    /**
     * @var TAdres $PostAdres
     */
    protected $PostAdres = null;

    /**
     * @param int $RelatieCode
     * @param string $Naam
     */
    public function __construct($RelatieCode, $Naam)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Naam = $Naam;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOrganisatie
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOrganisatie
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getBezoekAdres()
    {
      return $this->BezoekAdres;
    }

    /**
     * @param TAdres $BezoekAdres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOrganisatie
     */
    public function setBezoekAdres($BezoekAdres)
    {
      $this->BezoekAdres = $BezoekAdres;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getPostAdres()
    {
      return $this->PostAdres;
    }

    /**
     * @param TAdres $PostAdres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOrganisatie
     */
    public function setPostAdres($PostAdres)
    {
      $this->PostAdres = $PostAdres;
      return $this;
    }

}
