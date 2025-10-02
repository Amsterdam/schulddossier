<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAfspraak
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StartTijdStip;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $EindTijdStip;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker;

    /**
     * @var string
     */
    private string $Locatie;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $LocatieAdres;

    /**
     * @var string
     */
    private string $LocatieSpreekkamer;

    /**
     * @var string
     */
    private string $AfspraakCode;

    /**
     * @var string
     */
    private string $AfspraakOmschrijving;

    /**
     * @return \DateTimeInterface
     */
    public function getStartTijdStip() : \DateTimeInterface
    {
        return $this->StartTijdStip;
    }

    /**
     * @param \DateTimeInterface $StartTijdStip
     * @return static
     */
    public function withStartTijdStip(\DateTimeInterface $StartTijdStip) : static
    {
        $new = clone $this;
        $new->StartTijdStip = $StartTijdStip;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEindTijdStip() : \DateTimeInterface
    {
        return $this->EindTijdStip;
    }

    /**
     * @param \DateTimeInterface $EindTijdStip
     * @return static
     */
    public function withEindTijdStip(\DateTimeInterface $EindTijdStip) : static
    {
        $new = clone $this;
        $new->EindTijdStip = $EindTijdStip;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker
     * @return static
     */
    public function withMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocatie() : string
    {
        return $this->Locatie;
    }

    /**
     * @param string $Locatie
     * @return static
     */
    public function withLocatie(string $Locatie) : static
    {
        $new = clone $this;
        $new->Locatie = $Locatie;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getLocatieAdres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->LocatieAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $LocatieAdres
     * @return static
     */
    public function withLocatieAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $LocatieAdres) : static
    {
        $new = clone $this;
        $new->LocatieAdres = $LocatieAdres;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocatieSpreekkamer() : string
    {
        return $this->LocatieSpreekkamer;
    }

    /**
     * @param string $LocatieSpreekkamer
     * @return static
     */
    public function withLocatieSpreekkamer(string $LocatieSpreekkamer) : static
    {
        $new = clone $this;
        $new->LocatieSpreekkamer = $LocatieSpreekkamer;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfspraakCode() : string
    {
        return $this->AfspraakCode;
    }

    /**
     * @param string $AfspraakCode
     * @return static
     */
    public function withAfspraakCode(string $AfspraakCode) : static
    {
        $new = clone $this;
        $new->AfspraakCode = $AfspraakCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfspraakOmschrijving() : string
    {
        return $this->AfspraakOmschrijving;
    }

    /**
     * @param string $AfspraakOmschrijving
     * @return static
     */
    public function withAfspraakOmschrijving(string $AfspraakOmschrijving) : static
    {
        $new = clone $this;
        $new->AfspraakOmschrijving = $AfspraakOmschrijving;

        return $new;
    }
}

