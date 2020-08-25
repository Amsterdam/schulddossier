<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBROpdracht
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var int $CodeBegunstigde
     */
    protected $CodeBegunstigde = null;

    /**
     * @var string $Begunstigde
     */
    protected $Begunstigde = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var string $Referentie
     */
    protected $Referentie = null;

    /**
     * @var string $Periodiciteit
     */
    protected $Periodiciteit = null;

    /**
     * @var int $AantalKeerPerPeriode
     */
    protected $AantalKeerPerPeriode = null;

    /**
     * @var float $PeriodeBedrag
     */
    protected $PeriodeBedrag = null;

    /**
     * @var float $Maximaal
     */
    protected $Maximaal = null;

    /**
     * @var \DateTime $StartDatum
     */
    protected $StartDatum = null;

    /**
     * @var \DateTime $VolgendeDatum
     */
    protected $VolgendeDatum = null;

    /**
     * @var float $BetaaldBedrag
     */
    protected $BetaaldBedrag = null;

    /**
     * @var string $RestBetaling
     */
    protected $RestBetaling = null;

    /**
     * @var string $Soort
     */
    protected $Soort = null;

    /**
     * @var int $NummerReservering
     */
    protected $NummerReservering = null;

    /**
     * @var int $UniekVolgnummer
     */
    protected $UniekVolgnummer = null;

    /**
     * @var \DateTime $DatumLaatsteBetaling
     */
    protected $DatumLaatsteBetaling = null;

    /**
     * @var int $Prioriteit
     */
    protected $Prioriteit = null;

    /**
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param int $CodeBegunstigde
     * @param string $Begunstigde
     * @param string $Omschrijving
     * @param string $Referentie
     * @param string $Periodiciteit
     * @param int $AantalKeerPerPeriode
     * @param float $PeriodeBedrag
     * @param float $Maximaal
     * @param \DateTime $StartDatum
     * @param \DateTime $VolgendeDatum
     * @param float $BetaaldBedrag
     * @param string $RestBetaling
     * @param string $Soort
     * @param int $NummerReservering
     * @param int $UniekVolgnummer
     * @param \DateTime $DatumLaatsteBetaling
     * @param int $Prioriteit
     */
    public function __construct($Relatiecode, $Volgnummer, $CodeBegunstigde, $Begunstigde, $Omschrijving, $Referentie, $Periodiciteit, $AantalKeerPerPeriode, $PeriodeBedrag, $Maximaal, \DateTime $StartDatum, \DateTime $VolgendeDatum, $BetaaldBedrag, $RestBetaling, $Soort, $NummerReservering, $UniekVolgnummer, \DateTime $DatumLaatsteBetaling, $Prioriteit)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Volgnummer = $Volgnummer;
      $this->CodeBegunstigde = $CodeBegunstigde;
      $this->Begunstigde = $Begunstigde;
      $this->Omschrijving = $Omschrijving;
      $this->Referentie = $Referentie;
      $this->Periodiciteit = $Periodiciteit;
      $this->AantalKeerPerPeriode = $AantalKeerPerPeriode;
      $this->PeriodeBedrag = $PeriodeBedrag;
      $this->Maximaal = $Maximaal;
      $this->StartDatum = $StartDatum->format(\DateTime::ATOM);
      $this->VolgendeDatum = $VolgendeDatum->format(\DateTime::ATOM);
      $this->BetaaldBedrag = $BetaaldBedrag;
      $this->RestBetaling = $RestBetaling;
      $this->Soort = $Soort;
      $this->NummerReservering = $NummerReservering;
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
      $this->Prioriteit = $Prioriteit;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeBegunstigde()
    {
      return $this->CodeBegunstigde;
    }

    /**
     * @param int $CodeBegunstigde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setCodeBegunstigde($CodeBegunstigde)
    {
      $this->CodeBegunstigde = $CodeBegunstigde;
      return $this;
    }

    /**
     * @return string
     */
    public function getBegunstigde()
    {
      return $this->Begunstigde;
    }

    /**
     * @param string $Begunstigde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setBegunstigde($Begunstigde)
    {
      $this->Begunstigde = $Begunstigde;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
      return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferentie()
    {
      return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setReferentie($Referentie)
    {
      $this->Referentie = $Referentie;
      return $this;
    }

    /**
     * @return string
     */
    public function getPeriodiciteit()
    {
      return $this->Periodiciteit;
    }

    /**
     * @param string $Periodiciteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setPeriodiciteit($Periodiciteit)
    {
      $this->Periodiciteit = $Periodiciteit;
      return $this;
    }

    /**
     * @return int
     */
    public function getAantalKeerPerPeriode()
    {
      return $this->AantalKeerPerPeriode;
    }

    /**
     * @param int $AantalKeerPerPeriode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setAantalKeerPerPeriode($AantalKeerPerPeriode)
    {
      $this->AantalKeerPerPeriode = $AantalKeerPerPeriode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodeBedrag()
    {
      return $this->PeriodeBedrag;
    }

    /**
     * @param float $PeriodeBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setPeriodeBedrag($PeriodeBedrag)
    {
      $this->PeriodeBedrag = $PeriodeBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaximaal()
    {
      return $this->Maximaal;
    }

    /**
     * @param float $Maximaal
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setMaximaal($Maximaal)
    {
      $this->Maximaal = $Maximaal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDatum()
    {
      if ($this->StartDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setStartDatum(\DateTime $StartDatum)
    {
      $this->StartDatum = $StartDatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getVolgendeDatum()
    {
      if ($this->VolgendeDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->VolgendeDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $VolgendeDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setVolgendeDatum(\DateTime $VolgendeDatum)
    {
      $this->VolgendeDatum = $VolgendeDatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getBetaaldBedrag()
    {
      return $this->BetaaldBedrag;
    }

    /**
     * @param float $BetaaldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setBetaaldBedrag($BetaaldBedrag)
    {
      $this->BetaaldBedrag = $BetaaldBedrag;
      return $this;
    }

    /**
     * @return string
     */
    public function getRestBetaling()
    {
      return $this->RestBetaling;
    }

    /**
     * @param string $RestBetaling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setRestBetaling($RestBetaling)
    {
      $this->RestBetaling = $RestBetaling;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoort()
    {
      return $this->Soort;
    }

    /**
     * @param string $Soort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setSoort($Soort)
    {
      $this->Soort = $Soort;
      return $this;
    }

    /**
     * @return int
     */
    public function getNummerReservering()
    {
      return $this->NummerReservering;
    }

    /**
     * @param int $NummerReservering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setNummerReservering($NummerReservering)
    {
      $this->NummerReservering = $NummerReservering;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setUniekVolgnummer($UniekVolgnummer)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setDatumLaatsteBetaling(\DateTime $DatumLaatsteBetaling)
    {
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getPrioriteit()
    {
      return $this->Prioriteit;
    }

    /**
     * @param int $Prioriteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdracht
     */
    public function setPrioriteit($Prioriteit)
    {
      $this->Prioriteit = $Prioriteit;
      return $this;
    }

}
