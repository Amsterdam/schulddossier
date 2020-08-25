<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxTekst
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Naam
     */
    protected $Naam = null;

    /**
     * @var string $Onderwerp
     */
    protected $Onderwerp = null;

    /**
     * @var string $Tekst
     */
    protected $Tekst = null;

    /**
     * @param int $Code
     * @param string $Naam
     * @param string $Onderwerp
     * @param string $Tekst
     */
    public function __construct($Code, $Naam, $Onderwerp, $Tekst)
    {
      $this->Code = $Code;
      $this->Naam = $Naam;
      $this->Onderwerp = $Onderwerp;
      $this->Tekst = $Tekst;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxTekst
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxTekst
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
      return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxTekst
     */
    public function setOnderwerp($Onderwerp)
    {
      $this->Onderwerp = $Onderwerp;
      return $this;
    }

    /**
     * @return string
     */
    public function getTekst()
    {
      return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxTekst
     */
    public function setTekst($Tekst)
    {
      $this->Tekst = $Tekst;
      return $this;
    }

}
