<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TExtraProduct
{

    /**
     * @var TExtraProductHeader $InfoHeader
     */
    protected $InfoHeader = null;

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
     * @var \DateTime $Startdatum
     */
    protected $Startdatum = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $StatusOmschrijving
     */
    protected $StatusOmschrijving = null;

    /**
     * @var int $UitvoerendeOrganisatie
     */
    protected $UitvoerendeOrganisatie = null;

    /**
     * @var int $UitvoerendeOrganisatieContact
     */
    protected $UitvoerendeOrganisatieContact = null;

    /**
     * @var \DateTime $GeschatteEinddatum
     */
    protected $GeschatteEinddatum = null;

    /**
     * @var int $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @param TExtraProductHeader $InfoHeader
     * @param string $Medewerker
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTime $Startdatum
     * @param string $Status
     * @param string $StatusOmschrijving
     * @param int $UitvoerendeOrganisatie
     * @param int $UitvoerendeOrganisatieContact
     * @param \DateTime $GeschatteEinddatum
     * @param int $PartnerCode
     */
    public function __construct($InfoHeader, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, \DateTime $Startdatum, $Status, $StatusOmschrijving, $UitvoerendeOrganisatie, $UitvoerendeOrganisatieContact, \DateTime $GeschatteEinddatum, $PartnerCode)
    {
      $this->InfoHeader = $InfoHeader;
      $this->Medewerker = $Medewerker;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      $this->Status = $Status;
      $this->StatusOmschrijving = $StatusOmschrijving;
      $this->UitvoerendeOrganisatie = $UitvoerendeOrganisatie;
      $this->UitvoerendeOrganisatieContact = $UitvoerendeOrganisatieContact;
      $this->GeschatteEinddatum = $GeschatteEinddatum->format(\DateTime::ATOM);
      $this->PartnerCode = $PartnerCode;
    }

    /**
     * @return TExtraProductHeader
     */
    public function getInfoHeader()
    {
      return $this->InfoHeader;
    }

    /**
     * @param TExtraProductHeader $InfoHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setInfoHeader($InfoHeader)
    {
      $this->InfoHeader = $InfoHeader;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdatum()
    {
      if ($this->Startdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Startdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Startdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusOmschrijving()
    {
      return $this->StatusOmschrijving;
    }

    /**
     * @param string $StatusOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setStatusOmschrijving($StatusOmschrijving)
    {
      $this->StatusOmschrijving = $StatusOmschrijving;
      return $this;
    }

    /**
     * @return int
     */
    public function getUitvoerendeOrganisatie()
    {
      return $this->UitvoerendeOrganisatie;
    }

    /**
     * @param int $UitvoerendeOrganisatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setUitvoerendeOrganisatie($UitvoerendeOrganisatie)
    {
      $this->UitvoerendeOrganisatie = $UitvoerendeOrganisatie;
      return $this;
    }

    /**
     * @return int
     */
    public function getUitvoerendeOrganisatieContact()
    {
      return $this->UitvoerendeOrganisatieContact;
    }

    /**
     * @param int $UitvoerendeOrganisatieContact
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setUitvoerendeOrganisatieContact($UitvoerendeOrganisatieContact)
    {
      $this->UitvoerendeOrganisatieContact = $UitvoerendeOrganisatieContact;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeschatteEinddatum()
    {
      if ($this->GeschatteEinddatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeschatteEinddatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeschatteEinddatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setGeschatteEinddatum(\DateTime $GeschatteEinddatum)
    {
      $this->GeschatteEinddatum = $GeschatteEinddatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getPartnerCode()
    {
      return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProduct
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
      return $this;
    }

}
