<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TMedewerker implements RequestInterface
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Voornaam;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Voorvoegsels;

    /**
     * @var string
     */
    private $Voorletters;

    /**
     * @var string
     */
    private $Telefoon;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray
     */
    private $Teams;

    /**
     * Constructor
     *
     * @var string $Code
     * @var string $Voornaam
     * @var string $Achternaam
     * @var string $Voorvoegsels
     * @var string $Voorletters
     * @var string $Telefoon
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams
     */
    public function __construct($Code, $Voornaam, $Achternaam, $Voorvoegsels, $Voorletters, $Telefoon, $Teams)
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return TMedewerker
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornaam()
    {
        return $this->Voornaam;
    }

    /**
     * @param string $Voornaam
     * @return TMedewerker
     */
    public function withVoornaam($Voornaam)
    {
        $new = clone $this;
        $new->Voornaam = $Voornaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return TMedewerker
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels()
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return TMedewerker
     */
    public function withVoorvoegsels($Voorvoegsels)
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters()
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return TMedewerker
     */
    public function withVoorletters($Voorletters)
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoon()
    {
        return $this->Telefoon;
    }

    /**
     * @param string $Telefoon
     * @return TMedewerker
     */
    public function withTelefoon($Telefoon)
    {
        $new = clone $this;
        $new->Telefoon = $Telefoon;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray
     */
    public function getTeams()
    {
        return $this->Teams;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray $Teams
     * @return TMedewerker
     */
    public function withTeams($Teams)
    {
        $new = clone $this;
        $new->Teams = $Teams;

        return $new;
    }
}
