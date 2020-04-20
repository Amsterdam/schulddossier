<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSBEisers
{

    /**
     * @var SBEiserArray $Eisers
     */
    protected $Eisers = null;

    /**
     * @var float $SomTeruggemeldBedrag
     */
    protected $SomTeruggemeldBedrag = null;

    /**
     * @var float $SomBerekendBedrag
     */
    protected $SomBerekendBedrag = null;

    /**
     * @var float $SomGereserveerdBedrag
     */
    protected $SomGereserveerdBedrag = null;

    /**
     * @var float $SomDoorbetaaldBedrag
     */
    protected $SomDoorbetaaldBedrag = null;

    /**
     * @var float $SomPrognoseRestschuld
     */
    protected $SomPrognoseRestschuld = null;

    /**
     * @param SBEiserArray $Eisers
     * @param float $SomTeruggemeldBedrag
     * @param float $SomBerekendBedrag
     * @param float $SomGereserveerdBedrag
     * @param float $SomDoorbetaaldBedrag
     * @param float $SomPrognoseRestschuld
     */
    public function __construct($Eisers, $SomTeruggemeldBedrag, $SomBerekendBedrag, $SomGereserveerdBedrag, $SomDoorbetaaldBedrag, $SomPrognoseRestschuld)
    {
      $this->Eisers = $Eisers;
      $this->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;
      $this->SomBerekendBedrag = $SomBerekendBedrag;
      $this->SomGereserveerdBedrag = $SomGereserveerdBedrag;
      $this->SomDoorbetaaldBedrag = $SomDoorbetaaldBedrag;
      $this->SomPrognoseRestschuld = $SomPrognoseRestschuld;
    }

    /**
     * @return SBEiserArray
     */
    public function getEisers()
    {
      return $this->Eisers;
    }

    /**
     * @param SBEiserArray $Eisers
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEisers
     */
    public function setEisers($Eisers)
    {
      $this->Eisers = $Eisers;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEisers
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEisers
     */
    public function setSomBerekendBedrag($SomBerekendBedrag)
    {
      $this->SomBerekendBedrag = $SomBerekendBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getSomGereserveerdBedrag()
    {
      return $this->SomGereserveerdBedrag;
    }

    /**
     * @param float $SomGereserveerdBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEisers
     */
    public function setSomGereserveerdBedrag($SomGereserveerdBedrag)
    {
      $this->SomGereserveerdBedrag = $SomGereserveerdBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getSomDoorbetaaldBedrag()
    {
      return $this->SomDoorbetaaldBedrag;
    }

    /**
     * @param float $SomDoorbetaaldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEisers
     */
    public function setSomDoorbetaaldBedrag($SomDoorbetaaldBedrag)
    {
      $this->SomDoorbetaaldBedrag = $SomDoorbetaaldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getSomPrognoseRestschuld()
    {
      return $this->SomPrognoseRestschuld;
    }

    /**
     * @param float $SomPrognoseRestschuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEisers
     */
    public function setSomPrognoseRestschuld($SomPrognoseRestschuld)
    {
      $this->SomPrognoseRestschuld = $SomPrognoseRestschuld;
      return $this;
    }

}
