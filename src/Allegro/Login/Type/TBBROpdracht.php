<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TBBROpdracht implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var int
     */
    private $CodeBegunstigde;

    /**
     * @var string
     */
    private $Begunstigde;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var string
     */
    private $Referentie;

    /**
     * @var string
     */
    private $Periodiciteit;

    /**
     * @var int
     */
    private $AantalKeerPerPeriode;

    /**
     * @var float
     */
    private $PeriodeBedrag;

    /**
     * @var float
     */
    private $Maximaal;

    /**
     * @var DateTimeInterface
     */
    private $StartDatum;

    /**
     * @var DateTimeInterface
     */
    private $VolgendeDatum;

    /**
     * @var float
     */
    private $BetaaldBedrag;

    /**
     * @var string
     */
    private $RestBetaling;

    /**
     * @var string
     */
    private $Soort;

    /**
     * @var int
     */
    private $NummerReservering;

    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var DateTimeInterface
     */
    private $DatumLaatsteBetaling;

    /**
     * @var int
     */
    private $Prioriteit;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $Volgnummer
     * @var int $CodeBegunstigde
     * @var string $Begunstigde
     * @var string $Omschrijving
     * @var string $Referentie
     * @var string $Periodiciteit
     * @var int $AantalKeerPerPeriode
     * @var float $PeriodeBedrag
     * @var float $Maximaal
     * @var DateTimeInterface $StartDatum
     * @var DateTimeInterface $VolgendeDatum
     * @var float $BetaaldBedrag
     * @var string $RestBetaling
     * @var string $Soort
     * @var int $NummerReservering
     * @var int $UniekVolgnummer
     * @var DateTimeInterface $DatumLaatsteBetaling
     * @var int $Prioriteit
     */
    public function __construct($Relatiecode, $Volgnummer, $CodeBegunstigde, $Begunstigde, $Omschrijving, $Referentie, $Periodiciteit, $AantalKeerPerPeriode, $PeriodeBedrag, $Maximaal, $StartDatum, $VolgendeDatum, $BetaaldBedrag, $RestBetaling, $Soort, $NummerReservering, $UniekVolgnummer, $DatumLaatsteBetaling, $Prioriteit)
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
        $this->StartDatum = $StartDatum;
        $this->VolgendeDatum = $VolgendeDatum;
        $this->BetaaldBedrag = $BetaaldBedrag;
        $this->RestBetaling = $RestBetaling;
        $this->Soort = $Soort;
        $this->NummerReservering = $NummerReservering;
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->DatumLaatsteBetaling = $DatumLaatsteBetaling;
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
     * @return TBBROpdracht
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withCodeBegunstigde($CodeBegunstigde)
    {
        $new = clone $this;
        $new->CodeBegunstigde = $CodeBegunstigde;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withBegunstigde($Begunstigde)
    {
        $new = clone $this;
        $new->Begunstigde = $Begunstigde;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withReferentie($Referentie)
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withPeriodiciteit($Periodiciteit)
    {
        $new = clone $this;
        $new->Periodiciteit = $Periodiciteit;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withAantalKeerPerPeriode($AantalKeerPerPeriode)
    {
        $new = clone $this;
        $new->AantalKeerPerPeriode = $AantalKeerPerPeriode;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withPeriodeBedrag($PeriodeBedrag)
    {
        $new = clone $this;
        $new->PeriodeBedrag = $PeriodeBedrag;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withMaximaal($Maximaal)
    {
        $new = clone $this;
        $new->Maximaal = $Maximaal;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartDatum()
    {
        return $this->StartDatum;
    }

    /**
     * @param DateTimeInterface $StartDatum
     * @return TBBROpdracht
     */
    public function withStartDatum($StartDatum)
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getVolgendeDatum()
    {
        return $this->VolgendeDatum;
    }

    /**
     * @param DateTimeInterface $VolgendeDatum
     * @return TBBROpdracht
     */
    public function withVolgendeDatum($VolgendeDatum)
    {
        $new = clone $this;
        $new->VolgendeDatum = $VolgendeDatum;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withBetaaldBedrag($BetaaldBedrag)
    {
        $new = clone $this;
        $new->BetaaldBedrag = $BetaaldBedrag;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withRestBetaling($RestBetaling)
    {
        $new = clone $this;
        $new->RestBetaling = $RestBetaling;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withSoort($Soort)
    {
        $new = clone $this;
        $new->Soort = $Soort;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withNummerReservering($NummerReservering)
    {
        $new = clone $this;
        $new->NummerReservering = $NummerReservering;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDatumLaatsteBetaling()
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param DateTimeInterface $DatumLaatsteBetaling
     * @return TBBROpdracht
     */
    public function withDatumLaatsteBetaling($DatumLaatsteBetaling)
    {
        $new = clone $this;
        $new->DatumLaatsteBetaling = $DatumLaatsteBetaling;

        return $new;
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
     * @return TBBROpdracht
     */
    public function withPrioriteit($Prioriteit)
    {
        $new = clone $this;
        $new->Prioriteit = $Prioriteit;

        return $new;
    }


}

