<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusDeelopdracht implements RequestInterface
{
    /**
     * @var int
     */
    private int $VolgnummerCasus;

    /**
     * @var int
     */
    private int $VolgnummerKlantopdracht;

    /**
     * @var string
     */
    private string $ToelichtingKlantopdracht;

    /**
     * @var int
     */
    private int $VolgnummerDeelopdracht;

    /**
     * @var string
     */
    private string $Naam;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var string
     */
    private string $RubriekSoort;

    /**
     * @var string
     */
    private string $RubriekNaam;

    /**
     * @var string
     */
    private string $Toelichting;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumUiterlijk;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumUitgevoerd;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumNietUitgevoerd;

    /**
     * @var string
     */
    private string $NaamLang;

    /**
     * Constructor
     *
     * @param int $VolgnummerCasus
     * @param int $VolgnummerKlantopdracht
     * @param string $ToelichtingKlantopdracht
     * @param int $VolgnummerDeelopdracht
     * @param string $Naam
     * @param string $Omschrijving
     * @param string $RubriekSoort
     * @param string $RubriekNaam
     * @param string $Toelichting
     * @param \DateTimeInterface $Startdatum
     * @param \DateTimeInterface $DatumUiterlijk
     * @param \DateTimeInterface $DatumUitgevoerd
     * @param \DateTimeInterface $DatumNietUitgevoerd
     * @param string $NaamLang
     */
    public function __construct(int $VolgnummerCasus, int $VolgnummerKlantopdracht, string $ToelichtingKlantopdracht, int $VolgnummerDeelopdracht, string $Naam, string $Omschrijving, string $RubriekSoort, string $RubriekNaam, string $Toelichting, \DateTimeInterface $Startdatum, \DateTimeInterface $DatumUiterlijk, \DateTimeInterface $DatumUitgevoerd, \DateTimeInterface $DatumNietUitgevoerd, string $NaamLang)
    {
        $this->VolgnummerCasus = $VolgnummerCasus;
        $this->VolgnummerKlantopdracht = $VolgnummerKlantopdracht;
        $this->ToelichtingKlantopdracht = $ToelichtingKlantopdracht;
        $this->VolgnummerDeelopdracht = $VolgnummerDeelopdracht;
        $this->Naam = $Naam;
        $this->Omschrijving = $Omschrijving;
        $this->RubriekSoort = $RubriekSoort;
        $this->RubriekNaam = $RubriekNaam;
        $this->Toelichting = $Toelichting;
        $this->Startdatum = $Startdatum;
        $this->DatumUiterlijk = $DatumUiterlijk;
        $this->DatumUitgevoerd = $DatumUitgevoerd;
        $this->DatumNietUitgevoerd = $DatumNietUitgevoerd;
        $this->NaamLang = $NaamLang;
    }

    /**
     * @return int
     */
    public function getVolgnummerCasus() : int
    {
        return $this->VolgnummerCasus;
    }

    /**
     * @param int $VolgnummerCasus
     * @return static
     */
    public function withVolgnummerCasus(int $VolgnummerCasus) : static
    {
        $new = clone $this;
        $new->VolgnummerCasus = $VolgnummerCasus;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummerKlantopdracht() : int
    {
        return $this->VolgnummerKlantopdracht;
    }

    /**
     * @param int $VolgnummerKlantopdracht
     * @return static
     */
    public function withVolgnummerKlantopdracht(int $VolgnummerKlantopdracht) : static
    {
        $new = clone $this;
        $new->VolgnummerKlantopdracht = $VolgnummerKlantopdracht;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingKlantopdracht() : string
    {
        return $this->ToelichtingKlantopdracht;
    }

    /**
     * @param string $ToelichtingKlantopdracht
     * @return static
     */
    public function withToelichtingKlantopdracht(string $ToelichtingKlantopdracht) : static
    {
        $new = clone $this;
        $new->ToelichtingKlantopdracht = $ToelichtingKlantopdracht;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummerDeelopdracht() : int
    {
        return $this->VolgnummerDeelopdracht;
    }

    /**
     * @param int $VolgnummerDeelopdracht
     * @return static
     */
    public function withVolgnummerDeelopdracht(int $VolgnummerDeelopdracht) : static
    {
        $new = clone $this;
        $new->VolgnummerDeelopdracht = $VolgnummerDeelopdracht;

        return $new;
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
     * @return string
     */
    public function getRubriekSoort() : string
    {
        return $this->RubriekSoort;
    }

    /**
     * @param string $RubriekSoort
     * @return static
     */
    public function withRubriekSoort(string $RubriekSoort) : static
    {
        $new = clone $this;
        $new->RubriekSoort = $RubriekSoort;

        return $new;
    }

    /**
     * @return string
     */
    public function getRubriekNaam() : string
    {
        return $this->RubriekNaam;
    }

    /**
     * @param string $RubriekNaam
     * @return static
     */
    public function withRubriekNaam(string $RubriekNaam) : static
    {
        $new = clone $this;
        $new->RubriekNaam = $RubriekNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichting() : string
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return static
     */
    public function withToelichting(string $Toelichting) : static
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum() : \DateTimeInterface
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return static
     */
    public function withStartdatum(\DateTimeInterface $Startdatum) : static
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumUiterlijk() : \DateTimeInterface
    {
        return $this->DatumUiterlijk;
    }

    /**
     * @param \DateTimeInterface $DatumUiterlijk
     * @return static
     */
    public function withDatumUiterlijk(\DateTimeInterface $DatumUiterlijk) : static
    {
        $new = clone $this;
        $new->DatumUiterlijk = $DatumUiterlijk;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumUitgevoerd() : \DateTimeInterface
    {
        return $this->DatumUitgevoerd;
    }

    /**
     * @param \DateTimeInterface $DatumUitgevoerd
     * @return static
     */
    public function withDatumUitgevoerd(\DateTimeInterface $DatumUitgevoerd) : static
    {
        $new = clone $this;
        $new->DatumUitgevoerd = $DatumUitgevoerd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumNietUitgevoerd() : \DateTimeInterface
    {
        return $this->DatumNietUitgevoerd;
    }

    /**
     * @param \DateTimeInterface $DatumNietUitgevoerd
     * @return static
     */
    public function withDatumNietUitgevoerd(\DateTimeInterface $DatumNietUitgevoerd) : static
    {
        $new = clone $this;
        $new->DatumNietUitgevoerd = $DatumNietUitgevoerd;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamLang() : string
    {
        return $this->NaamLang;
    }

    /**
     * @param string $NaamLang
     * @return static
     */
    public function withNaamLang(string $NaamLang) : static
    {
        $new = clone $this;
        $new->NaamLang = $NaamLang;

        return $new;
    }
}

