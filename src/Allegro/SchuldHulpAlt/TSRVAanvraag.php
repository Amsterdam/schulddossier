<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSRVAanvraag
{

    /**
     * @var TSRVAanvraagHeader $InfoHeader
     */
    protected $InfoHeader = null;

    /**
     * @var \DateTime $Startdatum
     */
    protected $Startdatum = null;

    /**
     * @var \DateTime $Einddatum
     */
    protected $Einddatum = null;

    /**
     * @var string $Eindstatus
     */
    protected $Eindstatus = null;

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
     * @var float $VTLB
     */
    protected $VTLB = null;

    /**
     * @var \DateTime $DatumBerekening
     */
    protected $DatumBerekening = null;

    /**
     * @var float $BrutoAfloscapaciteit
     */
    protected $BrutoAfloscapaciteit = null;

    /**
     * @var float $KostenFinancieelBeheer
     */
    protected $KostenFinancieelBeheer = null;

    /**
     * @var float $KostenSchuldhulpverlening
     */
    protected $KostenSchuldhulpverlening = null;

    /**
     * @var float $NettoAfloscapaciteit
     */
    protected $NettoAfloscapaciteit = null;

    /**
     * @var float $TotaalAangemeldeSchuld
     */
    protected $TotaalAangemeldeSchuld = null;

    /**
     * @var float $TotaalTeruggemeldeSchuld
     */
    protected $TotaalTeruggemeldeSchuld = null;

    /**
     * @var int $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var \DateTime $Aanvraagdatum
     */
    protected $Aanvraagdatum = null;

    /**
     * @var string $RedenOpschorting
     */
    protected $RedenOpschorting = null;

    /**
     * @var float $ExtraInleg
     */
    protected $ExtraInleg = null;

    /**
     * @param TSRVAanvraagHeader $InfoHeader
     * @param \DateTime $Startdatum
     * @param \DateTime $Einddatum
     * @param string $Eindstatus
     * @param string $Medewerker
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param float $VTLB
     * @param \DateTime $DatumBerekening
     * @param float $BrutoAfloscapaciteit
     * @param float $KostenFinancieelBeheer
     * @param float $KostenSchuldhulpverlening
     * @param float $NettoAfloscapaciteit
     * @param float $TotaalAangemeldeSchuld
     * @param float $TotaalTeruggemeldeSchuld
     * @param int $PartnerCode
     * @param \DateTime $Aanvraagdatum
     * @param string $RedenOpschorting
     * @param float $ExtraInleg
     */
    public function __construct($InfoHeader, \DateTime $Startdatum, \DateTime $Einddatum, $Eindstatus, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, $VTLB, \DateTime $DatumBerekening, $BrutoAfloscapaciteit, $KostenFinancieelBeheer, $KostenSchuldhulpverlening, $NettoAfloscapaciteit, $TotaalAangemeldeSchuld, $TotaalTeruggemeldeSchuld, $PartnerCode, \DateTime $Aanvraagdatum, $RedenOpschorting, $ExtraInleg)
    {
      $this->InfoHeader = $InfoHeader;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      $this->Einddatum = $Einddatum->format(\DateTime::ATOM);
      $this->Eindstatus = $Eindstatus;
      $this->Medewerker = $Medewerker;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->VTLB = $VTLB;
      $this->DatumBerekening = $DatumBerekening->format(\DateTime::ATOM);
      $this->BrutoAfloscapaciteit = $BrutoAfloscapaciteit;
      $this->KostenFinancieelBeheer = $KostenFinancieelBeheer;
      $this->KostenSchuldhulpverlening = $KostenSchuldhulpverlening;
      $this->NettoAfloscapaciteit = $NettoAfloscapaciteit;
      $this->TotaalAangemeldeSchuld = $TotaalAangemeldeSchuld;
      $this->TotaalTeruggemeldeSchuld = $TotaalTeruggemeldeSchuld;
      $this->PartnerCode = $PartnerCode;
      $this->Aanvraagdatum = $Aanvraagdatum->format(\DateTime::ATOM);
      $this->RedenOpschorting = $RedenOpschorting;
      $this->ExtraInleg = $ExtraInleg;
    }

    /**
     * @return TSRVAanvraagHeader
     */
    public function getInfoHeader()
    {
      return $this->InfoHeader;
    }

    /**
     * @param TSRVAanvraagHeader $InfoHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setInfoHeader($InfoHeader)
    {
      $this->InfoHeader = $InfoHeader;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEinddatum()
    {
      if ($this->Einddatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Einddatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Einddatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setEinddatum(\DateTime $Einddatum)
    {
      $this->Einddatum = $Einddatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getEindstatus()
    {
      return $this->Eindstatus;
    }

    /**
     * @param string $Eindstatus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setEindstatus($Eindstatus)
    {
      $this->Eindstatus = $Eindstatus;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

    /**
     * @return float
     */
    public function getVTLB()
    {
      return $this->VTLB;
    }

    /**
     * @param float $VTLB
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setVTLB($VTLB)
    {
      $this->VTLB = $VTLB;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumBerekening()
    {
      if ($this->DatumBerekening == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumBerekening);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumBerekening
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setDatumBerekening(\DateTime $DatumBerekening)
    {
      $this->DatumBerekening = $DatumBerekening->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getBrutoAfloscapaciteit()
    {
      return $this->BrutoAfloscapaciteit;
    }

    /**
     * @param float $BrutoAfloscapaciteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setBrutoAfloscapaciteit($BrutoAfloscapaciteit)
    {
      $this->BrutoAfloscapaciteit = $BrutoAfloscapaciteit;
      return $this;
    }

    /**
     * @return float
     */
    public function getKostenFinancieelBeheer()
    {
      return $this->KostenFinancieelBeheer;
    }

    /**
     * @param float $KostenFinancieelBeheer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setKostenFinancieelBeheer($KostenFinancieelBeheer)
    {
      $this->KostenFinancieelBeheer = $KostenFinancieelBeheer;
      return $this;
    }

    /**
     * @return float
     */
    public function getKostenSchuldhulpverlening()
    {
      return $this->KostenSchuldhulpverlening;
    }

    /**
     * @param float $KostenSchuldhulpverlening
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setKostenSchuldhulpverlening($KostenSchuldhulpverlening)
    {
      $this->KostenSchuldhulpverlening = $KostenSchuldhulpverlening;
      return $this;
    }

    /**
     * @return float
     */
    public function getNettoAfloscapaciteit()
    {
      return $this->NettoAfloscapaciteit;
    }

    /**
     * @param float $NettoAfloscapaciteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setNettoAfloscapaciteit($NettoAfloscapaciteit)
    {
      $this->NettoAfloscapaciteit = $NettoAfloscapaciteit;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotaalAangemeldeSchuld()
    {
      return $this->TotaalAangemeldeSchuld;
    }

    /**
     * @param float $TotaalAangemeldeSchuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setTotaalAangemeldeSchuld($TotaalAangemeldeSchuld)
    {
      $this->TotaalAangemeldeSchuld = $TotaalAangemeldeSchuld;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotaalTeruggemeldeSchuld()
    {
      return $this->TotaalTeruggemeldeSchuld;
    }

    /**
     * @param float $TotaalTeruggemeldeSchuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setTotaalTeruggemeldeSchuld($TotaalTeruggemeldeSchuld)
    {
      $this->TotaalTeruggemeldeSchuld = $TotaalTeruggemeldeSchuld;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAanvraagdatum()
    {
      if ($this->Aanvraagdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Aanvraagdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Aanvraagdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setAanvraagdatum(\DateTime $Aanvraagdatum)
    {
      $this->Aanvraagdatum = $Aanvraagdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getRedenOpschorting()
    {
      return $this->RedenOpschorting;
    }

    /**
     * @param string $RedenOpschorting
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setRedenOpschorting($RedenOpschorting)
    {
      $this->RedenOpschorting = $RedenOpschorting;
      return $this;
    }

    /**
     * @return float
     */
    public function getExtraInleg()
    {
      return $this->ExtraInleg;
    }

    /**
     * @param float $ExtraInleg
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraag
     */
    public function setExtraInleg($ExtraInleg)
    {
      $this->ExtraInleg = $ExtraInleg;
      return $this;
    }

}
