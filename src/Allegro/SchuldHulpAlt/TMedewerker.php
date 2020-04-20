<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TMedewerker
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Voornaam
     */
    protected $Voornaam = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var string $Voorletters
     */
    protected $Voorletters = null;

    /**
     * @var string $Telefoon
     */
    protected $Telefoon = null;

    /**
     * @var TeamArray $Teams
     */
    protected $Teams = null;

    /**
     * @param string $Code
     * @param string $Voornaam
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Voorletters
     * @param string $Telefoon
     * @param TeamArray $Teams
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setVoornaam($Voornaam)
    {
      $this->Voornaam = $Voornaam;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setVoorletters($Voorletters)
    {
      $this->Voorletters = $Voorletters;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setTelefoon($Telefoon)
    {
      $this->Telefoon = $Telefoon;
      return $this;
    }

    /**
     * @return TeamArray
     */
    public function getTeams()
    {
      return $this->Teams;
    }

    /**
     * @param TeamArray $Teams
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TMedewerker
     */
    public function setTeams($Teams)
    {
      $this->Teams = $Teams;
      return $this;
    }

}
