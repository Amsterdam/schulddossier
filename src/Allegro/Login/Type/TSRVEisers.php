<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TSRVEisers
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray $Eisers;

    /**
     * @var float
     */
    private float $SomAangemeldBedrag;

    /**
     * @var float
     */
    private float $SomTeruggemeldBedrag;

    /**
     * @var float
     */
    private float $SomBerekendBedrag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray
     */
    public function getEisers() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray
    {
        return $this->Eisers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray $Eisers
     * @return static
     */
    public function withEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray $Eisers) : static
    {
        $new = clone $this;
        $new->Eisers = $Eisers;

        return $new;
    }

    /**
     * @return float
     */
    public function getSomAangemeldBedrag() : float
    {
        return $this->SomAangemeldBedrag;
    }

    /**
     * @param float $SomAangemeldBedrag
     * @return static
     */
    public function withSomAangemeldBedrag(float $SomAangemeldBedrag) : static
    {
        $new = clone $this;
        $new->SomAangemeldBedrag = $SomAangemeldBedrag;

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
}

