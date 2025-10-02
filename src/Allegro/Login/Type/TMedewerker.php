<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TMedewerker
{
    /**
     * @var string
     */
    private string $Code;

    /**
     * @var string
     */
    private string $Voornaam;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Voorvoegsels;

    /**
     * @var string
     */
    private string $Voorletters;

    /**
     * @var string
     */
    private string $Telefoon;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray $Teams;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return static
     */
    public function withCode(string $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornaam() : string
    {
        return $this->Voornaam;
    }

    /**
     * @param string $Voornaam
     * @return static
     */
    public function withVoornaam(string $Voornaam) : static
    {
        $new = clone $this;
        $new->Voornaam = $Voornaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam() : string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam) : static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels() : string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels) : static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters() : string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters) : static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoon() : string
    {
        return $this->Telefoon;
    }

    /**
     * @param string $Telefoon
     * @return static
     */
    public function withTelefoon(string $Telefoon) : static
    {
        $new = clone $this;
        $new->Telefoon = $Telefoon;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray
     */
    public function getTeams() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray
    {
        return $this->Teams;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray $Teams
     * @return static
     */
    public function withTeams(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray $Teams) : static
    {
        $new = clone $this;
        $new->Teams = $Teams;

        return $new;
    }
}

