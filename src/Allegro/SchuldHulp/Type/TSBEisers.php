<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSBEisers implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray $Eisers;

    /**
     * @var float
     */
    private float $SomTeruggemeldBedrag;

    /**
     * @var float
     */
    private float $SomBerekendBedrag;

    /**
     * @var float
     */
    private float $SomGereserveerdBedrag;

    /**
     * @var float
     */
    private float $SomDoorbetaaldBedrag;

    /**
     * @var float
     */
    private float $SomPrognoseRestschuld;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray $Eisers
     * @param float $SomTeruggemeldBedrag
     * @param float $SomBerekendBedrag
     * @param float $SomGereserveerdBedrag
     * @param float $SomDoorbetaaldBedrag
     * @param float $SomPrognoseRestschuld
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray $Eisers, float $SomTeruggemeldBedrag, float $SomBerekendBedrag, float $SomGereserveerdBedrag, float $SomDoorbetaaldBedrag, float $SomPrognoseRestschuld)
    {
        $this->Eisers = $Eisers;
        $this->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;
        $this->SomBerekendBedrag = $SomBerekendBedrag;
        $this->SomGereserveerdBedrag = $SomGereserveerdBedrag;
        $this->SomDoorbetaaldBedrag = $SomDoorbetaaldBedrag;
        $this->SomPrognoseRestschuld = $SomPrognoseRestschuld;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray
     */
    public function getEisers() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray
    {
        return $this->Eisers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray $Eisers
     * @return static
     */
    public function withEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray $Eisers) : static
    {
        $new = clone $this;
        $new->Eisers = $Eisers;

        return $new;
    }

    /**
     * @return float
     */
    public function getSomTeruggemeldBedrag() : float
    {
        return $this->SomTeruggemeldBedrag;
    }

    /**
     * @param float $SomTeruggemeldBedrag
     * @return static
     */
    public function withSomTeruggemeldBedrag(float $SomTeruggemeldBedrag) : static
    {
        $new = clone $this;
        $new->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getSomBerekendBedrag() : float
    {
        return $this->SomBerekendBedrag;
    }

    /**
     * @param float $SomBerekendBedrag
     * @return static
     */
    public function withSomBerekendBedrag(float $SomBerekendBedrag) : static
    {
        $new = clone $this;
        $new->SomBerekendBedrag = $SomBerekendBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getSomGereserveerdBedrag() : float
    {
        return $this->SomGereserveerdBedrag;
    }

    /**
     * @param float $SomGereserveerdBedrag
     * @return static
     */
    public function withSomGereserveerdBedrag(float $SomGereserveerdBedrag) : static
    {
        $new = clone $this;
        $new->SomGereserveerdBedrag = $SomGereserveerdBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getSomDoorbetaaldBedrag() : float
    {
        return $this->SomDoorbetaaldBedrag;
    }

    /**
     * @param float $SomDoorbetaaldBedrag
     * @return static
     */
    public function withSomDoorbetaaldBedrag(float $SomDoorbetaaldBedrag) : static
    {
        $new = clone $this;
        $new->SomDoorbetaaldBedrag = $SomDoorbetaaldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getSomPrognoseRestschuld() : float
    {
        return $this->SomPrognoseRestschuld;
    }

    /**
     * @param float $SomPrognoseRestschuld
     * @return static
     */
    public function withSomPrognoseRestschuld(float $SomPrognoseRestschuld) : static
    {
        $new = clone $this;
        $new->SomPrognoseRestschuld = $SomPrognoseRestschuld;

        return $new;
    }
}

