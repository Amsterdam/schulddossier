<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TSRVEisers implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVEiserArray
     */
    private $Eisers;

    /**
     * @var float
     */
    private $SomAangemeldBedrag;

    /**
     * @var float
     */
    private $SomTeruggemeldBedrag;

    /**
     * @var float
     */
    private $SomBerekendBedrag;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVEiserArray $Eisers
     * @var float $SomAangemeldBedrag
     * @var float $SomTeruggemeldBedrag
     * @var float $SomBerekendBedrag
     */
    public function __construct($Eisers, $SomAangemeldBedrag, $SomTeruggemeldBedrag, $SomBerekendBedrag)
    {
        $this->Eisers = $Eisers;
        $this->SomAangemeldBedrag = $SomAangemeldBedrag;
        $this->SomTeruggemeldBedrag = $SomTeruggemeldBedrag;
        $this->SomBerekendBedrag = $SomBerekendBedrag;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVEiserArray
     */
    public function getEisers()
    {
        return $this->Eisers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVEiserArray $Eisers
     * @return TSRVEisers
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
    public function getSomAangemeldBedrag()
    {
        return $this->SomAangemeldBedrag;
    }

    /**
     * @param float $SomAangemeldBedrag
     * @return TSRVEisers
     */
    public function withSomAangemeldBedrag($SomAangemeldBedrag)
    {
        $new = clone $this;
        $new->SomAangemeldBedrag = $SomAangemeldBedrag;

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
     * @return TSRVEisers
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
     * @return TSRVEisers
     */
    public function withSomBerekendBedrag($SomBerekendBedrag)
    {
        $new = clone $this;
        $new->SomBerekendBedrag = $SomBerekendBedrag;

        return $new;
    }


}

