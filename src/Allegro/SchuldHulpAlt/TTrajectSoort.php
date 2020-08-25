<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TTrajectSoort
{

    /**
     * @var string $Trajectnaam
     */
    protected $Trajectnaam = null;

    /**
     * @var int $Trajectcodes
     */
    protected $Trajectcodes = null;

    /**
     * @param string $Trajectnaam
     * @param int $Trajectcodes
     */
    public function __construct($Trajectnaam, $Trajectcodes)
    {
      $this->Trajectnaam = $Trajectnaam;
      $this->Trajectcodes = $Trajectcodes;
    }

    /**
     * @return string
     */
    public function getTrajectnaam()
    {
      return $this->Trajectnaam;
    }

    /**
     * @param string $Trajectnaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectSoort
     */
    public function setTrajectnaam($Trajectnaam)
    {
      $this->Trajectnaam = $Trajectnaam;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrajectcodes()
    {
      return $this->Trajectcodes;
    }

    /**
     * @param int $Trajectcodes
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectSoort
     */
    public function setTrajectcodes($Trajectcodes)
    {
      $this->Trajectcodes = $Trajectcodes;
      return $this;
    }

}
