<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBijlage
{

    /**
     * @var eSoortDocument $Soort
     */
    protected $Soort = null;

    /**
     * @var string $Extension
     */
    protected $Extension = null;

    /**
     * @var base64Binary $Bijlage
     */
    protected $Bijlage = null;

    /**
     * @param eSoortDocument $Soort
     * @param string $Extension
     * @param base64Binary $Bijlage
     */
    public function __construct($Soort, $Extension, $Bijlage)
    {
      $this->Soort = $Soort;
      $this->Extension = $Extension;
      $this->Bijlage = $Bijlage;
    }

    /**
     * @return eSoortDocument
     */
    public function getSoort()
    {
      return $this->Soort;
    }

    /**
     * @param eSoortDocument $Soort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBijlage
     */
    public function setSoort($Soort)
    {
      $this->Soort = $Soort;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBijlage
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBijlage()
    {
      return $this->Bijlage;
    }

    /**
     * @param base64Binary $Bijlage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBijlage
     */
    public function setBijlage($Bijlage)
    {
      $this->Bijlage = $Bijlage;
      return $this;
    }

}
