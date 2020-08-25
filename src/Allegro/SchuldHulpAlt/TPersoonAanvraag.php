<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPersoonAanvraag
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var string $Voornamen
     */
    protected $Voornamen = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var string $Geslacht
     */
    protected $Geslacht = null;

    /**
     * @var int $Geboortedatum
     */
    protected $Geboortedatum = null;

    /**
     * @var int $BSN
     */
    protected $BSN = null;

    /**
     * @var eNationaliteit $Nationaliteit
     */
    protected $Nationaliteit = null;

    /**
     * @var string $RekeningIBAN
     */
    protected $RekeningIBAN = null;

    /**
     * @var string $RekeningBIC
     */
    protected $RekeningBIC = null;

    /**
     * @var string $RekeningBank
     */
    protected $RekeningBank = null;

    /**
     * @var string $Voorletters
     */
    protected $Voorletters = null;

    /**
     * @param int $Relatiecode
     * @param string $Voornamen
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Geslacht
     * @param int $Geboortedatum
     * @param int $BSN
     * @param eNationaliteit $Nationaliteit
     * @param string $RekeningIBAN
     * @param string $RekeningBIC
     * @param string $RekeningBank
     * @param string $Voorletters
     */
    public function __construct($Relatiecode, $Voornamen, $Achternaam, $Voorvoegsels, $Geslacht, $Geboortedatum, $BSN, $Nationaliteit, $RekeningIBAN, $RekeningBIC, $RekeningBank, $Voorletters)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Voornamen = $Voornamen;
      $this->Achternaam = $Achternaam;
      $this->Voorvoegsels = $Voorvoegsels;
      $this->Geslacht = $Geslacht;
      $this->Geboortedatum = $Geboortedatum;
      $this->BSN = $BSN;
      $this->Nationaliteit = $Nationaliteit;
      $this->RekeningIBAN = $RekeningIBAN;
      $this->RekeningBIC = $RekeningBIC;
      $this->RekeningBank = $RekeningBank;
      $this->Voorletters = $Voorletters;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
      return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoornamen()
    {
      return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setVoornamen($Voornamen)
    {
      $this->Voornamen = $Voornamen;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeslacht()
    {
      return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setGeslacht($Geslacht)
    {
      $this->Geslacht = $Geslacht;
      return $this;
    }

    /**
     * @return int
     */
    public function getGeboortedatum()
    {
      return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setGeboortedatum($Geboortedatum)
    {
      $this->Geboortedatum = $Geboortedatum;
      return $this;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
      return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setBSN($BSN)
    {
      $this->BSN = $BSN;
      return $this;
    }

    /**
     * @return eNationaliteit
     */
    public function getNationaliteit()
    {
      return $this->Nationaliteit;
    }

    /**
     * @param eNationaliteit $Nationaliteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setNationaliteit($Nationaliteit)
    {
      $this->Nationaliteit = $Nationaliteit;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekeningIBAN()
    {
      return $this->RekeningIBAN;
    }

    /**
     * @param string $RekeningIBAN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setRekeningIBAN($RekeningIBAN)
    {
      $this->RekeningIBAN = $RekeningIBAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekeningBIC()
    {
      return $this->RekeningBIC;
    }

    /**
     * @param string $RekeningBIC
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setRekeningBIC($RekeningBIC)
    {
      $this->RekeningBIC = $RekeningBIC;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekeningBank()
    {
      return $this->RekeningBank;
    }

    /**
     * @param string $RekeningBank
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setRekeningBank($RekeningBank)
    {
      $this->RekeningBank = $RekeningBank;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPersoonAanvraag
     */
    public function setVoorletters($Voorletters)
    {
      $this->Voorletters = $Voorletters;
      return $this;
    }

}
