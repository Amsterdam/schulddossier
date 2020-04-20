<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TKind
{

    /**
     * @var int $UniekVolgnummer
     */
    protected $UniekVolgnummer = null;

    /**
     * @var string $Voornaam
     */
    protected $Voornaam = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var \DateTime $Geboortedatum
     */
    protected $Geboortedatum = null;

    /**
     * @var string $Activiteit
     */
    protected $Activiteit = null;

    /**
     * @var boolean $MeetelKind
     */
    protected $MeetelKind = null;

    /**
     * @param int $UniekVolgnummer
     * @param string $Voornaam
     * @param string $Achternaam
     * @param \DateTime $Geboortedatum
     * @param string $Activiteit
     * @param boolean $MeetelKind
     */
    public function __construct($UniekVolgnummer, $Voornaam, $Achternaam, \DateTime $Geboortedatum, $Activiteit, $MeetelKind)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->Voornaam = $Voornaam;
      $this->Achternaam = $Achternaam;
      $this->Geboortedatum = $Geboortedatum->format(\DateTime::ATOM);
      $this->Activiteit = $Activiteit;
      $this->MeetelKind = $MeetelKind;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
      return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TKind
     */
    public function setUniekVolgnummer($UniekVolgnummer)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TKind
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TKind
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeboortedatum()
    {
      if ($this->Geboortedatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Geboortedatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Geboortedatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TKind
     */
    public function setGeboortedatum(\DateTime $Geboortedatum)
    {
      $this->Geboortedatum = $Geboortedatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getActiviteit()
    {
      return $this->Activiteit;
    }

    /**
     * @param string $Activiteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TKind
     */
    public function setActiviteit($Activiteit)
    {
      $this->Activiteit = $Activiteit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMeetelKind()
    {
      return $this->MeetelKind;
    }

    /**
     * @param boolean $MeetelKind
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TKind
     */
    public function setMeetelKind($MeetelKind)
    {
      $this->MeetelKind = $MeetelKind;
      return $this;
    }

}
