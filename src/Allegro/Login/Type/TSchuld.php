<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TSchuld
{
    /**
     * @var string
     */
    private string $Naam;

    /**
     * @var float
     */
    private float $Schuld;

    /**
     * @var null | bool
     */
    private ?bool $Studieschuld = null;

    /**
     * @var null | string
     */
    private ?string $Referentie = null;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var int
     */
    private int $CodeEiser;

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
     * @return float
     */
    public function getSchuld() : float
    {
        return $this->Schuld;
    }

    /**
     * @param float $Schuld
     * @return static
     */
    public function withSchuld(float $Schuld) : static
    {
        $new = clone $this;
        $new->Schuld = $Schuld;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getStudieschuld() : ?bool
    {
        return $this->Studieschuld;
    }

    /**
     * @param null | bool $Studieschuld
     * @return static
     */
    public function withStudieschuld(?bool $Studieschuld) : static
    {
        $new = clone $this;
        $new->Studieschuld = $Studieschuld;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReferentie() : ?string
    {
        return $this->Referentie;
    }

    /**
     * @param null | string $Referentie
     * @return static
     */
    public function withReferentie(?string $Referentie) : static
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeEiser() : int
    {
        return $this->CodeEiser;
    }

    /**
     * @param int $CodeEiser
     * @return static
     */
    public function withCodeEiser(int $CodeEiser) : static
    {
        $new = clone $this;
        $new->CodeEiser = $CodeEiser;

        return $new;
    }
}

