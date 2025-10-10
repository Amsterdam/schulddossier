<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TSBEisers
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray
     */
    private $Eisers;

    /**
     * @var float
     */
    private $SomTeruggemeldBedrag;

    /**
     * @var float
     */
    private $SomBerekendBedrag;

    /**
     * @var float
     */
    private $SomGereserveerdBedrag;

    /**
     * @var float
     */
    private $SomDoorbetaaldBedrag;

    /**
     * @var float
     */
    private $SomPrognoseRestschuld;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray
     */
    public function getEisers()
    {
        return $this->Eisers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray $Eisers
     * @return TSBEisers
     */
    public function withEisers($Eisers)
    {
        $new = clone $this;
        $new->Eisers = $Eisers;

        return $new;
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
     * @return TSBEisers
     */
    public function withSomTeruggemeldBedrag($SomTeruggemeldBedrag)
    {
        $new = clone $this;
        $new->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;

        return $new;
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
     * @return TSBEisers
     */
    public function withSomBerekendBedrag($SomBerekendBedrag)
    {
        $new = clone $this;
        $new->SomBerekendBedrag = $SomBerekendBedrag;

        return $new;
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
     * @return TSBEisers
     */
    public function withSomGereserveerdBedrag($SomGereserveerdBedrag)
    {
        $new = clone $this;
        $new->SomGereserveerdBedrag = $SomGereserveerdBedrag;

        return $new;
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
     * @return TSBEisers
     */
    public function withSomDoorbetaaldBedrag($SomDoorbetaaldBedrag)
    {
        $new = clone $this;
        $new->SomDoorbetaaldBedrag = $SomDoorbetaaldBedrag;

        return $new;
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
     * @return TSBEisers
     */
    public function withSomPrognoseRestschuld($SomPrognoseRestschuld)
    {
        $new = clone $this;
        $new->SomPrognoseRestschuld = $SomPrognoseRestschuld;

        return $new;
    }
}

