<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAfspraak implements RequestInterface
{

    /**
     * @var \DateTimeInterface
     */
    private $StartTijdStip;

    /**
     * @var \DateTimeInterface
     */
    private $EindTijdStip;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    private $Medewerker;

    /**
     * @var string
     */
    private $Locatie;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $LocatieAdres;

    /**
     * @var string
     */
    private $LocatieSpreekkamer;

    /**
     * @var string
     */
    private $AfspraakCode;

    /**
     * @var string
     */
    private $AfspraakOmschrijving;

    /**
     * Constructor
     *
     * @var \DateTimeInterface $StartTijdStip
     * @var \DateTimeInterface $EindTijdStip
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Medewerker
     * @var string $Locatie
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $LocatieAdres
     * @var string $LocatieSpreekkamer
     * @var string $AfspraakCode
     * @var string $AfspraakOmschrijving
     */
    public function __construct($StartTijdStip, $EindTijdStip, $Medewerker, $Locatie, $LocatieAdres, $LocatieSpreekkamer, $AfspraakCode, $AfspraakOmschrijving)
    {
        $this->StartTijdStip = $StartTijdStip;
        $this->EindTijdStip = $EindTijdStip;
        $this->Medewerker = $Medewerker;
        $this->Locatie = $Locatie;
        $this->LocatieAdres = $LocatieAdres;
        $this->LocatieSpreekkamer = $LocatieSpreekkamer;
        $this->AfspraakCode = $AfspraakCode;
        $this->AfspraakOmschrijving = $AfspraakOmschrijving;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartTijdStip()
    {
        return $this->StartTijdStip;
    }

    /**
     * @param \DateTimeInterface $StartTijdStip
     * @return TAfspraak
     */
    public function withStartTijdStip($StartTijdStip)
    {
        $new = clone $this;
        $new->StartTijdStip = $StartTijdStip;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEindTijdStip()
    {
        return $this->EindTijdStip;
    }

    /**
     * @param \DateTimeInterface $EindTijdStip
     * @return TAfspraak
     */
    public function withEindTijdStip($EindTijdStip)
    {
        $new = clone $this;
        $new->EindTijdStip = $EindTijdStip;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Medewerker
     * @return TAfspraak
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocatie()
    {
        return $this->Locatie;
    }

    /**
     * @param string $Locatie
     * @return TAfspraak
     */
    public function withLocatie($Locatie)
    {
        $new = clone $this;
        $new->Locatie = $Locatie;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getLocatieAdres()
    {
        return $this->LocatieAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $LocatieAdres
     * @return TAfspraak
     */
    public function withLocatieAdres($LocatieAdres)
    {
        $new = clone $this;
        $new->LocatieAdres = $LocatieAdres;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocatieSpreekkamer()
    {
        return $this->LocatieSpreekkamer;
    }

    /**
     * @param string $LocatieSpreekkamer
     * @return TAfspraak
     */
    public function withLocatieSpreekkamer($LocatieSpreekkamer)
    {
        $new = clone $this;
        $new->LocatieSpreekkamer = $LocatieSpreekkamer;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfspraakCode()
    {
        return $this->AfspraakCode;
    }

    /**
     * @param string $AfspraakCode
     * @return TAfspraak
     */
    public function withAfspraakCode($AfspraakCode)
    {
        $new = clone $this;
        $new->AfspraakCode = $AfspraakCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfspraakOmschrijving()
    {
        return $this->AfspraakOmschrijving;
    }

    /**
     * @param string $AfspraakOmschrijving
     * @return TAfspraak
     */
    public function withAfspraakOmschrijving($AfspraakOmschrijving)
    {
        $new = clone $this;
        $new->AfspraakOmschrijving = $AfspraakOmschrijving;

        return $new;
    }


}

