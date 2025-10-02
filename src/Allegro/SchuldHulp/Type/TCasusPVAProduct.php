<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusPVAProduct implements RequestInterface
{
    /**
     * @var string
     */
    private string $Naam;

    /**
     * @var int
     */
    private int $IDAanvraag;

    /**
     * @var bool
     */
    private bool $Geactiveerd;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumActivering;

    /**
     * Constructor
     *
     * @param string $Naam
     * @param int $IDAanvraag
     * @param bool $Geactiveerd
     * @param \DateTimeInterface $DatumActivering
     */
    public function __construct(string $Naam, int $IDAanvraag, bool $Geactiveerd, \DateTimeInterface $DatumActivering)
    {
        $this->Naam = $Naam;
        $this->IDAanvraag = $IDAanvraag;
        $this->Geactiveerd = $Geactiveerd;
        $this->DatumActivering = $DatumActivering;
    }

    /**
     * @return string
     */
    public function getNaam() : string
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return static
     */
    public function withNaam(string $Naam) : static
    {
        $new = clone $this;
        $new->Naam = $Naam;

        return $new;
    }

    /**
     * @return int
     */
    public function getIDAanvraag() : int
    {
        return $this->IDAanvraag;
    }

    /**
     * @param int $IDAanvraag
     * @return static
     */
    public function withIDAanvraag(int $IDAanvraag) : static
    {
        $new = clone $this;
        $new->IDAanvraag = $IDAanvraag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGeactiveerd() : bool
    {
        return $this->Geactiveerd;
    }

    /**
     * @param bool $Geactiveerd
     * @return static
     */
    public function withGeactiveerd(bool $Geactiveerd) : static
    {
        $new = clone $this;
        $new->Geactiveerd = $Geactiveerd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumActivering() : \DateTimeInterface
    {
        return $this->DatumActivering;
    }

    /**
     * @param \DateTimeInterface $DatumActivering
     * @return static
     */
    public function withDatumActivering(\DateTimeInterface $DatumActivering) : static
    {
        $new = clone $this;
        $new->DatumActivering = $DatumActivering;

        return $new;
    }
}

