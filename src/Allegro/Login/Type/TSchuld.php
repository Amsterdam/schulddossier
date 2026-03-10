<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSchuld implements RequestInterface
{
    /**
     * @var string
     */
    private $Naam;

    /**
     * @var float
     */
    private $Schuld;

    /**
     * @var bool
     */
    private $Studieschuld;

    /**
     * @var string
     */
    private $Referentie;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * Constructor
     *
     * @var string $Naam
     * @var float $Schuld
     * @var bool $Studieschuld
     * @var string $Referentie
     * @var string $Omschrijving
     */
    public function __construct($Naam, $Schuld, $Studieschuld, $Referentie, $Omschrijving)
    {
        $this->Naam = $Naam;
        $this->Schuld = $Schuld;
        $this->Studieschuld = $Studieschuld;
        $this->Referentie = $Referentie;
        $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return TSchuld
     */
    public function withNaam($Naam)
    {
        $new = clone $this;
        $new->Naam = $Naam;

        return $new;
    }

    /**
     * @return float
     */
    public function getSchuld()
    {
        return $this->Schuld;
    }

    /**
     * @param float $Schuld
     * @return TSchuld
     */
    public function withSchuld($Schuld)
    {
        $new = clone $this;
        $new->Schuld = $Schuld;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStudieschuld()
    {
        return $this->Studieschuld;
    }

    /**
     * @param bool $Studieschuld
     * @return TSchuld
     */
    public function withStudieschuld($Studieschuld)
    {
        $new = clone $this;
        $new->Studieschuld = $Studieschuld;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentie()
    {
        return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return TSchuld
     */
    public function withReferentie($Referentie)
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return TSchuld
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }
}
