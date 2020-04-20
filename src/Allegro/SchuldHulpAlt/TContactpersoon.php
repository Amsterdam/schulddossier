<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TContactpersoon
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var string $Voornaam
     */
    protected $Voornaam = null;

    /**
     * @var string $Voorletters
     */
    protected $Voorletters = null;

    /**
     * @var \DateTime $GeboorteDatum
     */
    protected $GeboorteDatum = null;

    /**
     * @var string $Telefoon
     */
    protected $Telefoon = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var boolean $NogBevestigen
     */
    protected $NogBevestigen = null;

    /**
     * @var boolean $Actief
     */
    protected $Actief = null;

    /**
     * @var boolean $MagAanmelden
     */
    protected $MagAanmelden = null;

    /**
     * @param int $Code
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Voornaam
     * @param string $Voorletters
     * @param \DateTime $GeboorteDatum
     * @param string $Telefoon
     * @param string $Email
     * @param boolean $NogBevestigen
     * @param boolean $Actief
     * @param boolean $MagAanmelden
     */
    public function __construct($Code, $Achternaam, $Voorvoegsels, $Voornaam, $Voorletters, \DateTime $GeboorteDatum, $Telefoon, $Email, $NogBevestigen, $Actief, $MagAanmelden)
    {
      $this->Code = $Code;
      $this->Achternaam = $Achternaam;
      $this->Voorvoegsels = $Voorvoegsels;
      $this->Voornaam = $Voornaam;
      $this->Voorletters = $Voorletters;
      $this->GeboorteDatum = $GeboorteDatum->format(\DateTime::ATOM);
      $this->Telefoon = $Telefoon;
      $this->Email = $Email;
      $this->NogBevestigen = $NogBevestigen;
      $this->Actief = $Actief;
      $this->MagAanmelden = $MagAanmelden;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setVoornaam($Voornaam)
    {
      $this->Voornaam = $Voornaam;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setVoorletters($Voorletters)
    {
      $this->Voorletters = $Voorletters;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeboorteDatum()
    {
      if ($this->GeboorteDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeboorteDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeboorteDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setGeboorteDatum(\DateTime $GeboorteDatum)
    {
      $this->GeboorteDatum = $GeboorteDatum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setTelefoon($Telefoon)
    {
      $this->Telefoon = $Telefoon;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNogBevestigen()
    {
      return $this->NogBevestigen;
    }

    /**
     * @param boolean $NogBevestigen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setNogBevestigen($NogBevestigen)
    {
      $this->NogBevestigen = $NogBevestigen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActief()
    {
      return $this->Actief;
    }

    /**
     * @param boolean $Actief
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setActief($Actief)
    {
      $this->Actief = $Actief;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMagAanmelden()
    {
      return $this->MagAanmelden;
    }

    /**
     * @param boolean $MagAanmelden
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContactpersoon
     */
    public function setMagAanmelden($MagAanmelden)
    {
      $this->MagAanmelden = $MagAanmelden;
      return $this;
    }

}
