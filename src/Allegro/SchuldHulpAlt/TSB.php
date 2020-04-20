<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSB
{

    /**
     * @var TSBHeader $InfoHeader
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
     * @var \DateTime $StartdatumEersteBetaling
     */
    protected $StartdatumEersteBetaling = null;

    /**
     * @var \DateTime $TheoEinddatum
     */
    protected $TheoEinddatum = null;

    /**
     * @var int $TotaalAantalMaanden
     */
    protected $TotaalAantalMaanden = null;

    /**
     * @var int $TotaalAantalMaandenVerstreken
     */
    protected $TotaalAantalMaandenVerstreken = null;

    /**
     * @var int $TotaalAantalMaandenResterend
     */
    protected $TotaalAantalMaandenResterend = null;

    /**
     * @var float $VTLB
     */
    protected $VTLB = null;

    /**
     * @var \DateTime $DatumBerekening
     */
    protected $DatumBerekening = null;

    /**
     * @var float $BrutoAflosCapaciteitMaand
     */
    protected $BrutoAflosCapaciteitMaand = null;

    /**
     * @var float $KostenFinancieelBeheerMaand
     */
    protected $KostenFinancieelBeheerMaand = null;

    /**
     * @var float $KostenSchuldhulpverleningMaand
     */
    protected $KostenSchuldhulpverleningMaand = null;

    /**
     * @var float $NettoAflosCapaciteitMaand
     */
    protected $NettoAflosCapaciteitMaand = null;

    /**
     * @var \DateTime $DatumOverzicht
     */
    protected $DatumOverzicht = null;

    /**
     * @var int $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var float $TotaalSchuldbedrag
     */
    protected $TotaalSchuldbedrag = null;

    /**
     * @var float $MaximumKosten
     */
    protected $MaximumKosten = null;

    /**
     * @var float $BetaaldeKosten
     */
    protected $BetaaldeKosten = null;

    /**
     * @var \DateTime $DatumLaatsteBetaling
     */
    protected $DatumLaatsteBetaling = null;

    /**
     * @var float $BedragLaatsteBetaling
     */
    protected $BedragLaatsteBetaling = null;

    /**
     * @param TSBHeader $InfoHeader
     * @param string $Medewerker
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTime $Startdatum
     * @param \DateTime $StartdatumEersteBetaling
     * @param \DateTime $TheoEinddatum
     * @param int $TotaalAantalMaanden
     * @param int $TotaalAantalMaandenVerstreken
     * @param int $TotaalAantalMaandenResterend
     * @param float $VTLB
     * @param \DateTime $DatumBerekening
     * @param float $BrutoAflosCapaciteitMaand
     * @param float $KostenFinancieelBeheerMaand
     * @param float $KostenSchuldhulpverleningMaand
     * @param float $NettoAflosCapaciteitMaand
     * @param \DateTime $DatumOverzicht
     * @param int $PartnerCode
     * @param float $TotaalSchuldbedrag
     * @param float $MaximumKosten
     * @param float $BetaaldeKosten
     * @param \DateTime $DatumLaatsteBetaling
     * @param float $BedragLaatsteBetaling
     */
    public function __construct($InfoHeader, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, \DateTime $Startdatum, \DateTime $StartdatumEersteBetaling, \DateTime $TheoEinddatum, $TotaalAantalMaanden, $TotaalAantalMaandenVerstreken, $TotaalAantalMaandenResterend, $VTLB, \DateTime $DatumBerekening, $BrutoAflosCapaciteitMaand, $KostenFinancieelBeheerMaand, $KostenSchuldhulpverleningMaand, $NettoAflosCapaciteitMaand, \DateTime $DatumOverzicht, $PartnerCode, $TotaalSchuldbedrag, $MaximumKosten, $BetaaldeKosten, \DateTime $DatumLaatsteBetaling, $BedragLaatsteBetaling)
    {
      $this->InfoHeader = $InfoHeader;
      $this->Medewerker = $Medewerker;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      $this->StartdatumEersteBetaling = $StartdatumEersteBetaling->format(\DateTime::ATOM);
      $this->TheoEinddatum = $TheoEinddatum->format(\DateTime::ATOM);
      $this->TotaalAantalMaanden = $TotaalAantalMaanden;
      $this->TotaalAantalMaandenVerstreken = $TotaalAantalMaandenVerstreken;
      $this->TotaalAantalMaandenResterend = $TotaalAantalMaandenResterend;
      $this->VTLB = $VTLB;
      $this->DatumBerekening = $DatumBerekening->format(\DateTime::ATOM);
      $this->BrutoAflosCapaciteitMaand = $BrutoAflosCapaciteitMaand;
      $this->KostenFinancieelBeheerMaand = $KostenFinancieelBeheerMaand;
      $this->KostenSchuldhulpverleningMaand = $KostenSchuldhulpverleningMaand;
      $this->NettoAflosCapaciteitMaand = $NettoAflosCapaciteitMaand;
      $this->DatumOverzicht = $DatumOverzicht->format(\DateTime::ATOM);
      $this->PartnerCode = $PartnerCode;
      $this->TotaalSchuldbedrag = $TotaalSchuldbedrag;
      $this->MaximumKosten = $MaximumKosten;
      $this->BetaaldeKosten = $BetaaldeKosten;
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
      $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
    }

    /**
     * @return TSBHeader
     */
    public function getInfoHeader()
    {
      return $this->InfoHeader;
    }

    /**
     * @param TSBHeader $InfoHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdatumEersteBetaling()
    {
      if ($this->StartdatumEersteBetaling == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartdatumEersteBetaling);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartdatumEersteBetaling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setStartdatumEersteBetaling(\DateTime $StartdatumEersteBetaling)
    {
      $this->StartdatumEersteBetaling = $StartdatumEersteBetaling->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTheoEinddatum()
    {
      if ($this->TheoEinddatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TheoEinddatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TheoEinddatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setTheoEinddatum(\DateTime $TheoEinddatum)
    {
      $this->TheoEinddatum = $TheoEinddatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaanden()
    {
      return $this->TotaalAantalMaanden;
    }

    /**
     * @param int $TotaalAantalMaanden
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setTotaalAantalMaanden($TotaalAantalMaanden)
    {
      $this->TotaalAantalMaanden = $TotaalAantalMaanden;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaandenVerstreken()
    {
      return $this->TotaalAantalMaandenVerstreken;
    }

    /**
     * @param int $TotaalAantalMaandenVerstreken
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setTotaalAantalMaandenVerstreken($TotaalAantalMaandenVerstreken)
    {
      $this->TotaalAantalMaandenVerstreken = $TotaalAantalMaandenVerstreken;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaandenResterend()
    {
      return $this->TotaalAantalMaandenResterend;
    }

    /**
     * @param int $TotaalAantalMaandenResterend
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setTotaalAantalMaandenResterend($TotaalAantalMaandenResterend)
    {
      $this->TotaalAantalMaandenResterend = $TotaalAantalMaandenResterend;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setDatumBerekening(\DateTime $DatumBerekening)
    {
      $this->DatumBerekening = $DatumBerekening->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getBrutoAflosCapaciteitMaand()
    {
      return $this->BrutoAflosCapaciteitMaand;
    }

    /**
     * @param float $BrutoAflosCapaciteitMaand
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setBrutoAflosCapaciteitMaand($BrutoAflosCapaciteitMaand)
    {
      $this->BrutoAflosCapaciteitMaand = $BrutoAflosCapaciteitMaand;
      return $this;
    }

    /**
     * @return float
     */
    public function getKostenFinancieelBeheerMaand()
    {
      return $this->KostenFinancieelBeheerMaand;
    }

    /**
     * @param float $KostenFinancieelBeheerMaand
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setKostenFinancieelBeheerMaand($KostenFinancieelBeheerMaand)
    {
      $this->KostenFinancieelBeheerMaand = $KostenFinancieelBeheerMaand;
      return $this;
    }

    /**
     * @return float
     */
    public function getKostenSchuldhulpverleningMaand()
    {
      return $this->KostenSchuldhulpverleningMaand;
    }

    /**
     * @param float $KostenSchuldhulpverleningMaand
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setKostenSchuldhulpverleningMaand($KostenSchuldhulpverleningMaand)
    {
      $this->KostenSchuldhulpverleningMaand = $KostenSchuldhulpverleningMaand;
      return $this;
    }

    /**
     * @return float
     */
    public function getNettoAflosCapaciteitMaand()
    {
      return $this->NettoAflosCapaciteitMaand;
    }

    /**
     * @param float $NettoAflosCapaciteitMaand
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setNettoAflosCapaciteitMaand($NettoAflosCapaciteitMaand)
    {
      $this->NettoAflosCapaciteitMaand = $NettoAflosCapaciteitMaand;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumOverzicht()
    {
      if ($this->DatumOverzicht == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumOverzicht);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumOverzicht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setDatumOverzicht(\DateTime $DatumOverzicht)
    {
      $this->DatumOverzicht = $DatumOverzicht->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotaalSchuldbedrag()
    {
      return $this->TotaalSchuldbedrag;
    }

    /**
     * @param float $TotaalSchuldbedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setTotaalSchuldbedrag($TotaalSchuldbedrag)
    {
      $this->TotaalSchuldbedrag = $TotaalSchuldbedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaximumKosten()
    {
      return $this->MaximumKosten;
    }

    /**
     * @param float $MaximumKosten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setMaximumKosten($MaximumKosten)
    {
      $this->MaximumKosten = $MaximumKosten;
      return $this;
    }

    /**
     * @return float
     */
    public function getBetaaldeKosten()
    {
      return $this->BetaaldeKosten;
    }

    /**
     * @param float $BetaaldeKosten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setBetaaldeKosten($BetaaldeKosten)
    {
      $this->BetaaldeKosten = $BetaaldeKosten;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumLaatsteBetaling()
    {
      if ($this->DatumLaatsteBetaling == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumLaatsteBetaling);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumLaatsteBetaling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setDatumLaatsteBetaling(\DateTime $DatumLaatsteBetaling)
    {
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getBedragLaatsteBetaling()
    {
      return $this->BedragLaatsteBetaling;
    }

    /**
     * @param float $BedragLaatsteBetaling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSB
     */
    public function setBedragLaatsteBetaling($BedragLaatsteBetaling)
    {
      $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
      return $this;
    }

}
