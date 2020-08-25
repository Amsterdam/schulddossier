<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSRVEisers
{

    /**
     * @var SRVEiserArray $Eisers
     */
    protected $Eisers = null;

    /**
     * @var float $SomAangemeldBedrag
     */
    protected $SomAangemeldBedrag = null;

    /**
     * @var float $SomTeruggemeldBedrag
     */
    protected $SomTeruggemeldBedrag = null;

    /**
     * @var float $SomBerekendBedrag
     */
    protected $SomBerekendBedrag = null;

    /**
     * @param SRVEiserArray $Eisers
     * @param float $SomAangemeldBedrag
     * @param float $SomTeruggemeldBedrag
     * @param float $SomBerekendBedrag
     */
    public function __construct($Eisers, $SomAangemeldBedrag, $SomTeruggemeldBedrag, $SomBerekendBedrag)
    {
      $this->Eisers = $Eisers;
      $this->SomAangemeldBedrag = $SomAangemeldBedrag;
      $this->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;
      $this->SomBerekendBedrag = $SomBerekendBedrag;
    }

    /**
     * @return SRVEiserArray
     */
    public function getEisers()
    {
      return $this->Eisers;
    }

    /**
     * @param SRVEiserArray $Eisers
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEisers
     */
    public function setEisers($Eisers)
    {
      $this->Eisers = $Eisers;
      return $this;
    }

    /**
     * @return float
     */
    public function getSomAangemeldBedrag()
    {
      return $this->SomAangemeldBedrag;
    }

    /**
     * @param float $SomAangemeldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEisers
     */
    public function setSomAangemeldBedrag($SomAangemeldBedrag)
    {
      $this->SomAangemeldBedrag = $SomAangemeldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getSomTeruggemeldBedrag()
    {
      return $this->SomTeruggemeldBedrag;
    }

    /**
     * @param float $SomTeruggemeldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEisers
     */
    public function setSomTeruggemeldBedrag($SomTeruggemeldBedrag)
    {
      $this->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getSomBerekendBedrag()
    {
      return $this->SomBerekendBedrag;
    }

    /**
     * @param float $SomBerekendBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEisers
     */
    public function setSomBerekendBedrag($SomBerekendBedrag)
    {
      $this->SomBerekendBedrag = $SomBerekendBedrag;
      return $this;
    }

}
