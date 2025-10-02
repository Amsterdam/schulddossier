<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TMedewerker implements RequestInterface
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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams;

    /**
     * Constructor
     *
     * @param string $Code
     * @param string $Voornaam
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Voorletters
     * @param string $Telefoon
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams
     */
    public function __construct(string $Code, string $Voornaam, string $Achternaam, string $Voorvoegsels, string $Voorletters, string $Telefoon, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams)
    {
        $this->Code = $Code;
        $this->Voornaam = $Voornaam;
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Voorletters = $Voorletters;
        $this->Telefoon = $Telefoon;
        $this->Teams = $Teams;
    }

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray
     */
    public function getTeams() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray
    {
        return $this->Teams;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams
     * @return static
     */
    public function withTeams(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams) : static
    {
        $new = clone $this;
        $new->Teams = $Teams;

        return $new;
    }
}

