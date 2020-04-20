<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TLijstKredietsoort
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @param string $Code
     * @param string $Omschrijving
     */
    public function __construct($Code, $Omschrijving)
    {
      $this->Code = $Code;
      $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TLijstKredietsoort
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TLijstKredietsoort
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

}
