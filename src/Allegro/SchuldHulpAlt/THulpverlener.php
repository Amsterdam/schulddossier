<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class THulpverlener
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $OrganisatieCode
     */
    protected $OrganisatieCode = null;

    /**
     * @var string $OrganisatieNaam
     */
    protected $OrganisatieNaam = null;

    /**
     * @var int $ContactCode
     */
    protected $ContactCode = null;

    /**
     * @var string $ContactNaam
     */
    protected $ContactNaam = null;

    /**
     * @var string $SoortHulp
     */
    protected $SoortHulp = null;

    /**
     * @var boolean $InzageGevraagd
     */
    protected $InzageGevraagd = null;

    /**
     * @var \DateTime $DatumInzageGevraagd
     */
    protected $DatumInzageGevraagd = null;

    /**
     * @var string $Inzage
     */
    protected $Inzage = null;

    /**
     * @var \DateTime $DatumInzage
     */
    protected $DatumInzage = null;

    /**
     * @param int $Code
     * @param int $OrganisatieCode
     * @param string $OrganisatieNaam
     * @param int $ContactCode
     * @param string $ContactNaam
     * @param string $SoortHulp
     * @param boolean $InzageGevraagd
     * @param \DateTime $DatumInzageGevraagd
     * @param string $Inzage
     * @param \DateTime $DatumInzage
     */
    public function __construct($Code, $OrganisatieCode, $OrganisatieNaam, $ContactCode, $ContactNaam, $SoortHulp, $InzageGevraagd, \DateTime $DatumInzageGevraagd, $Inzage, \DateTime $DatumInzage)
    {
      $this->Code = $Code;
      $this->OrganisatieCode = $OrganisatieCode;
      $this->OrganisatieNaam = $OrganisatieNaam;
      $this->ContactCode = $ContactCode;
      $this->ContactNaam = $ContactNaam;
      $this->SoortHulp = $SoortHulp;
      $this->InzageGevraagd = $InzageGevraagd;
      $this->DatumInzageGevraagd = $DatumInzageGevraagd->format(\DateTime::ATOM);
      $this->Inzage = $Inzage;
      $this->DatumInzage = $DatumInzage->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrganisatieCode()
    {
      return $this->OrganisatieCode;
    }

    /**
     * @param int $OrganisatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setOrganisatieCode($OrganisatieCode)
    {
      $this->OrganisatieCode = $OrganisatieCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganisatieNaam()
    {
      return $this->OrganisatieNaam;
    }

    /**
     * @param string $OrganisatieNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setOrganisatieNaam($OrganisatieNaam)
    {
      $this->OrganisatieNaam = $OrganisatieNaam;
      return $this;
    }

    /**
     * @return int
     */
    public function getContactCode()
    {
      return $this->ContactCode;
    }

    /**
     * @param int $ContactCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setContactCode($ContactCode)
    {
      $this->ContactCode = $ContactCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactNaam()
    {
      return $this->ContactNaam;
    }

    /**
     * @param string $ContactNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setContactNaam($ContactNaam)
    {
      $this->ContactNaam = $ContactNaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoortHulp()
    {
      return $this->SoortHulp;
    }

    /**
     * @param string $SoortHulp
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setSoortHulp($SoortHulp)
    {
      $this->SoortHulp = $SoortHulp;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInzageGevraagd()
    {
      return $this->InzageGevraagd;
    }

    /**
     * @param boolean $InzageGevraagd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setInzageGevraagd($InzageGevraagd)
    {
      $this->InzageGevraagd = $InzageGevraagd;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumInzageGevraagd()
    {
      if ($this->DatumInzageGevraagd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumInzageGevraagd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumInzageGevraagd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setDatumInzageGevraagd(\DateTime $DatumInzageGevraagd)
    {
      $this->DatumInzageGevraagd = $DatumInzageGevraagd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getInzage()
    {
      return $this->Inzage;
    }

    /**
     * @param string $Inzage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setInzage($Inzage)
    {
      $this->Inzage = $Inzage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumInzage()
    {
      if ($this->DatumInzage == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumInzage);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumInzage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\THulpverlener
     */
    public function setDatumInzage(\DateTime $DatumInzage)
    {
      $this->DatumInzage = $DatumInzage->format(\DateTime::ATOM);
      return $this;
    }

}
