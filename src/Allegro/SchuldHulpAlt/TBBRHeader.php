<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBRHeader
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var string $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var int $Opdrachtgever
     */
    protected $Opdrachtgever = null;

    /**
     * @var int $OpdrachtgeverContact
     */
    protected $OpdrachtgeverContact = null;

    /**
     * @var string $VormCode
     */
    protected $VormCode = null;

    /**
     * @var string $VormNaam
     */
    protected $VormNaam = null;

    /**
     * @var string $ProductNaam
     */
    protected $ProductNaam = null;

    /**
     * @var string $ProductOmschrijving
     */
    protected $ProductOmschrijving = null;

    /**
     * @var string $Team
     */
    protected $Team = null;

    /**
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param string $Medewerker
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param string $VormCode
     * @param string $VormNaam
     * @param string $ProductNaam
     * @param string $ProductOmschrijving
     * @param string $Team
     */
    public function __construct($RelatieCode, $Volgnummer, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, $VormCode, $VormNaam, $ProductNaam, $ProductOmschrijving, $Team)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->Medewerker = $Medewerker;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->VormCode = $VormCode;
      $this->VormNaam = $VormNaam;
      $this->ProductNaam = $ProductNaam;
      $this->ProductOmschrijving = $ProductOmschrijving;
      $this->Team = $Team;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
      return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
      return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
      return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
      return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setOpdrachtgever($Opdrachtgever)
    {
      $this->Opdrachtgever = $Opdrachtgever;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
      return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getVormCode()
    {
      return $this->VormCode;
    }

    /**
     * @param string $VormCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setVormCode($VormCode)
    {
      $this->VormCode = $VormCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVormNaam()
    {
      return $this->VormNaam;
    }

    /**
     * @param string $VormNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setVormNaam($VormNaam)
    {
      $this->VormNaam = $VormNaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductNaam()
    {
      return $this->ProductNaam;
    }

    /**
     * @param string $ProductNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setProductNaam($ProductNaam)
    {
      $this->ProductNaam = $ProductNaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductOmschrijving()
    {
      return $this->ProductOmschrijving;
    }

    /**
     * @param string $ProductOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setProductOmschrijving($ProductOmschrijving)
    {
      $this->ProductOmschrijving = $ProductOmschrijving;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
      return $this->Team;
    }

    /**
     * @param string $Team
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRHeader
     */
    public function setTeam($Team)
    {
      $this->Team = $Team;
      return $this;
    }

}
