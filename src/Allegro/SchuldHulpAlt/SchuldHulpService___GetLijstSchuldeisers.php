<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetLijstSchuldeisers
{

    /**
     * @var string $aZoekargument
     */
    protected $aZoekargument = null;

    /**
     * @param string $aZoekargument
     */
    public function __construct($aZoekargument)
    {
      $this->aZoekargument = $aZoekargument;
    }

    /**
     * @return string
     */
    public function getAZoekargument()
    {
      return $this->aZoekargument;
    }

    /**
     * @param string $aZoekargument
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetLijstSchuldeisers
     */
    public function setAZoekargument($aZoekargument)
    {
      $this->aZoekargument = $aZoekargument;
      return $this;
    }

}
