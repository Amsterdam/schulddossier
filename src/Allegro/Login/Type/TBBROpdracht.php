<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBROpdracht
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var int
     */
    private int $CodeBegunstigde;

    /**
     * @var string
     */
    private string $Begunstigde;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var string
     */
    private string $Referentie;

    /**
     * @var string
     */
    private string $Periodiciteit;

    /**
     * @var int
     */
    private int $AantalKeerPerPeriode;

    /**
     * @var float
     */
    private float $PeriodeBedrag;

    /**
     * @var float
     */
    private float $Maximaal;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StartDatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $VolgendeDatum;

    /**
     * @var float
     */
    private float $BetaaldBedrag;

    /**
     * @var string
     */
    private string $RestBetaling;

    /**
     * @var string
     */
    private string $Soort;

    /**
     * @var int
     */
    private int $NummerReservering;

    /**
     * @var int
     */
    private int $UniekVolgnummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumLaatsteBetaling;

    /**
     * @var int
     */
    private int $Prioriteit;

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeBegunstigde() : int
    {
        return $this->CodeBegunstigde;
    }

    /**
     * @param int $CodeBegunstigde
     * @return static
     */
    public function withCodeBegunstigde(int $CodeBegunstigde) : static
    {
        $new = clone $this;
        $new->CodeBegunstigde = $CodeBegunstigde;

        return $new;
    }

    /**
     * @return string
     */
    public function getBegunstigde() : string
    {
        return $this->Begunstigde;
    }

    /**
     * @param string $Begunstigde
     * @return static
     */
    public function withBegunstigde(string $Begunstigde) : static
    {
        $new = clone $this;
        $new->Begunstigde = $Begunstigde;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentie() : string
    {
        return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return static
     */
    public function withReferentie(string $Referentie) : static
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
    }

    /**
     * @return string
     */
    public function getPeriodiciteit() : string
    {
        return $this->Periodiciteit;
    }

    /**
     * @param string $Periodiciteit
     * @return static
     */
    public function withPeriodiciteit(string $Periodiciteit) : static
    {
        $new = clone $this;
        $new->Periodiciteit = $Periodiciteit;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalKeerPerPeriode() : int
    {
        return $this->AantalKeerPerPeriode;
    }

    /**
     * @param int $AantalKeerPerPeriode
     * @return static
     */
    public function withAantalKeerPerPeriode(int $AantalKeerPerPeriode) : static
    {
        $new = clone $this;
        $new->AantalKeerPerPeriode = $AantalKeerPerPeriode;

        return $new;
    }

    /**
     * @return float
     */
    public function getPeriodeBedrag() : float
    {
        return $this->PeriodeBedrag;
    }

    /**
     * @param float $PeriodeBedrag
     * @return static
     */
    public function withPeriodeBedrag(float $PeriodeBedrag) : static
    {
        $new = clone $this;
        $new->PeriodeBedrag = $PeriodeBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaximaal() : float
    {
        return $this->Maximaal;
    }

    /**
     * @param float $Maximaal
     * @return static
     */
    public function withMaximaal(float $Maximaal) : static
    {
        $new = clone $this;
        $new->Maximaal = $Maximaal;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDatum() : \DateTimeInterface
    {
        return $this->StartDatum;
    }

    /**
     * @param \DateTimeInterface $StartDatum
     * @return static
     */
    public function withStartDatum(\DateTimeInterface $StartDatum) : static
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVolgendeDatum() : \DateTimeInterface
    {
        return $this->VolgendeDatum;
    }

    /**
     * @param \DateTimeInterface $VolgendeDatum
     * @return static
     */
    public function withVolgendeDatum(\DateTimeInterface $VolgendeDatum) : static
    {
        $new = clone $this;
        $new->VolgendeDatum = $VolgendeDatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldBedrag() : float
    {
        return $this->BetaaldBedrag;
    }

    /**
     * @param float $BetaaldBedrag
     * @return static
     */
    public function withBetaaldBedrag(float $BetaaldBedrag) : static
    {
        $new = clone $this;
        $new->BetaaldBedrag = $BetaaldBedrag;

        return $new;
    }

    /**
     * @return string
     */
    public function getRestBetaling() : string
    {
        return $this->RestBetaling;
    }

    /**
     * @param string $RestBetaling
     * @return static
     */
    public function withRestBetaling(string $RestBetaling) : static
    {
        $new = clone $this;
        $new->RestBetaling = $RestBetaling;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoort() : string
    {
        return $this->Soort;
    }

    /**
     * @param string $Soort
     * @return static
     */
    public function withSoort(string $Soort) : static
    {
        $new = clone $this;
        $new->Soort = $Soort;

        return $new;
    }

    /**
     * @return int
     */
    public function getNummerReservering() : int
    {
        return $this->NummerReservering;
    }

    /**
     * @param int $NummerReservering
     * @return static
     */
    public function withNummerReservering(int $NummerReservering) : static
    {
        $new = clone $this;
        $new->NummerReservering = $NummerReservering;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer() : int
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return static
     */
    public function withUniekVolgnummer(int $UniekVolgnummer) : static
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumLaatsteBetaling() : \DateTimeInterface
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @return static
     */
    public function withDatumLaatsteBetaling(\DateTimeInterface $DatumLaatsteBetaling) : static
    {
        $new = clone $this;
        $new->DatumLaatsteBetaling = $DatumLaatsteBetaling;

        return $new;
    }

    /**
     * @return int
     */
    public function getPrioriteit() : int
    {
        return $this->Prioriteit;
    }

    /**
     * @param int $Prioriteit
     * @return static
     */
    public function withPrioriteit(int $Prioriteit) : static
    {
        $new = clone $this;
        $new->Prioriteit = $Prioriteit;

        return $new;
    }
}

