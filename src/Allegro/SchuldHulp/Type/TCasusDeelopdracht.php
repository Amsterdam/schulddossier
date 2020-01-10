<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusDeelopdracht implements RequestInterface
{

    /**
     * @var int
     */
    private $VolgnummerCasus;

    /**
     * @var int
     */
    private $VolgnummerKlantopdracht;

    /**
     * @var string
     */
    private $ToelichtingKlantopdracht;

    /**
     * @var int
     */
    private $VolgnummerDeelopdracht;

    /**
     * @var string
     */
    private $Naam;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var string
     */
    private $RubriekSoort;

    /**
     * @var string
     */
    private $RubriekNaam;

    /**
     * @var string
     */
    private $Toelichting;

    /**
     * @var \DateTimeInterface
     */
    private $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private $DatumUiterlijk;

    /**
     * @var \DateTimeInterface
     */
    private $DatumUitgevoerd;

    /**
     * @var \DateTimeInterface
     */
    private $DatumNietUitgevoerd;

    /**
     * @var string
     */
    private $NaamLang;

    /**
     * Constructor
     *
     * @var int $VolgnummerCasus
     * @var int $VolgnummerKlantopdracht
     * @var string $ToelichtingKlantopdracht
     * @var int $VolgnummerDeelopdracht
     * @var string $Naam
     * @var string $Omschrijving
     * @var string $RubriekSoort
     * @var string $RubriekNaam
     * @var string $Toelichting
     * @var \DateTimeInterface $Startdatum
     * @var \DateTimeInterface $DatumUiterlijk
     * @var \DateTimeInterface $DatumUitgevoerd
     * @var \DateTimeInterface $DatumNietUitgevoerd
     * @var string $NaamLang
     */
    public function __construct($VolgnummerCasus, $VolgnummerKlantopdracht, $ToelichtingKlantopdracht, $VolgnummerDeelopdracht, $Naam, $Omschrijving, $RubriekSoort, $RubriekNaam, $Toelichting, $Startdatum, $DatumUiterlijk, $DatumUitgevoerd, $DatumNietUitgevoerd, $NaamLang)
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
    public function getVolgnummerCasus()
    {
        return $this->VolgnummerCasus;
    }

    /**
     * @param int $VolgnummerCasus
     * @return TCasusDeelopdracht
     */
    public function withVolgnummerCasus($VolgnummerCasus)
    {
        $new = clone $this;
        $new->VolgnummerCasus = $VolgnummerCasus;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummerKlantopdracht()
    {
        return $this->VolgnummerKlantopdracht;
    }

    /**
     * @param int $VolgnummerKlantopdracht
     * @return TCasusDeelopdracht
     */
    public function withVolgnummerKlantopdracht($VolgnummerKlantopdracht)
    {
        $new = clone $this;
        $new->VolgnummerKlantopdracht = $VolgnummerKlantopdracht;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingKlantopdracht()
    {
        return $this->ToelichtingKlantopdracht;
    }

    /**
     * @param string $ToelichtingKlantopdracht
     * @return TCasusDeelopdracht
     */
    public function withToelichtingKlantopdracht($ToelichtingKlantopdracht)
    {
        $new = clone $this;
        $new->ToelichtingKlantopdracht = $ToelichtingKlantopdracht;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummerDeelopdracht()
    {
        return $this->VolgnummerDeelopdracht;
    }

    /**
     * @param int $VolgnummerDeelopdracht
     * @return TCasusDeelopdracht
     */
    public function withVolgnummerDeelopdracht($VolgnummerDeelopdracht)
    {
        $new = clone $this;
        $new->VolgnummerDeelopdracht = $VolgnummerDeelopdracht;

        return $new;
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
     * @return TCasusDeelopdracht
     */
    public function withNaam($Naam)
    {
        $new = clone $this;
        $new->Naam = $Naam;

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
     * @return TCasusDeelopdracht
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getRubriekSoort()
    {
        return $this->RubriekSoort;
    }

    /**
     * @param string $RubriekSoort
     * @return TCasusDeelopdracht
     */
    public function withRubriekSoort($RubriekSoort)
    {
        $new = clone $this;
        $new->RubriekSoort = $RubriekSoort;

        return $new;
    }

    /**
     * @return string
     */
    public function getRubriekNaam()
    {
        return $this->RubriekNaam;
    }

    /**
     * @param string $RubriekNaam
     * @return TCasusDeelopdracht
     */
    public function withRubriekNaam($RubriekNaam)
    {
        $new = clone $this;
        $new->RubriekNaam = $RubriekNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichting()
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return TCasusDeelopdracht
     */
    public function withToelichting($Toelichting)
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return TCasusDeelopdracht
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumUiterlijk()
    {
        return $this->DatumUiterlijk;
    }

    /**
     * @param \DateTimeInterface $DatumUiterlijk
     * @return TCasusDeelopdracht
     */
    public function withDatumUiterlijk($DatumUiterlijk)
    {
        $new = clone $this;
        $new->DatumUiterlijk = $DatumUiterlijk;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumUitgevoerd()
    {
        return $this->DatumUitgevoerd;
    }

    /**
     * @param \DateTimeInterface $DatumUitgevoerd
     * @return TCasusDeelopdracht
     */
    public function withDatumUitgevoerd($DatumUitgevoerd)
    {
        $new = clone $this;
        $new->DatumUitgevoerd = $DatumUitgevoerd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumNietUitgevoerd()
    {
        return $this->DatumNietUitgevoerd;
    }

    /**
     * @param \DateTimeInterface $DatumNietUitgevoerd
     * @return TCasusDeelopdracht
     */
    public function withDatumNietUitgevoerd($DatumNietUitgevoerd)
    {
        $new = clone $this;
        $new->DatumNietUitgevoerd = $DatumNietUitgevoerd;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamLang()
    {
        return $this->NaamLang;
    }

    /**
     * @param string $NaamLang
     * @return TCasusDeelopdracht
     */
    public function withNaamLang($NaamLang)
    {
        $new = clone $this;
        $new->NaamLang = $NaamLang;

        return $new;
    }


}

