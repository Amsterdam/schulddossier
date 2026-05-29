<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPandDetail
{
    /**
     * @var string
     */
    private string $Pandnummer;

    /**
     * @var int
     */
    private int $BeleenBewijsVlgnr;

    /**
     * @var string
     */
    private string $BeleenBewijsNr;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StartDatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Beleenbewijs_Datum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Beleenbewijs_Einddatum;

    /**
     * @var float
     */
    private float $Beleenbewijs_Beleensom;

    /**
     * @var int
     */
    private int $Verlengen;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $NwBeleenbewijs_Einddatum;

    /**
     * @var float
     */
    private float $NwBeleenbewijs_Rente;

    /**
     * @var float
     */
    private float $Rentepercentage;

    /**
     * @var int
     */
    private int $AantalArtikelen;

    /**
     * @var string
     */
    private string $OmschrijvingArtikelen;

    /**
     * @var float
     */
    private float $TotaalTaxatieWaarde;

    /**
     * @return string
     */
    public function getPandnummer(): string
    {
        return $this->Pandnummer;
    }

    /**
     * @param string $Pandnummer
     * @return static
     */
    public function withPandnummer(string $Pandnummer): static
    {
        $new = clone $this;
        $new->Pandnummer = $Pandnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getBeleenBewijsVlgnr(): int
    {
        return $this->BeleenBewijsVlgnr;
    }

    /**
     * @param int $BeleenBewijsVlgnr
     * @return static
     */
    public function withBeleenBewijsVlgnr(int $BeleenBewijsVlgnr): static
    {
        $new = clone $this;
        $new->BeleenBewijsVlgnr = $BeleenBewijsVlgnr;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeleenBewijsNr(): string
    {
        return $this->BeleenBewijsNr;
    }

    /**
     * @param string $BeleenBewijsNr
     * @return static
     */
    public function withBeleenBewijsNr(string $BeleenBewijsNr): static
    {
        $new = clone $this;
        $new->BeleenBewijsNr = $BeleenBewijsNr;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDatum(): \DateTimeInterface
    {
        return $this->StartDatum;
    }

    /**
     * @param \DateTimeInterface $StartDatum
     * @return static
     */
    public function withStartDatum(\DateTimeInterface $StartDatum): static
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijs_Datum(): \DateTimeInterface
    {
        return $this->Beleenbewijs_Datum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Datum
     * @return static
     */
    public function withBeleenbewijs_Datum(\DateTimeInterface $Beleenbewijs_Datum): static
    {
        $new = clone $this;
        $new->Beleenbewijs_Datum = $Beleenbewijs_Datum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijs_Einddatum(): \DateTimeInterface
    {
        return $this->Beleenbewijs_Einddatum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Einddatum
     * @return static
     */
    public function withBeleenbewijs_Einddatum(\DateTimeInterface $Beleenbewijs_Einddatum): static
    {
        $new = clone $this;
        $new->Beleenbewijs_Einddatum = $Beleenbewijs_Einddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getBeleenbewijs_Beleensom(): float
    {
        return $this->Beleenbewijs_Beleensom;
    }

    /**
     * @param float $Beleenbewijs_Beleensom
     * @return static
     */
    public function withBeleenbewijs_Beleensom(float $Beleenbewijs_Beleensom): static
    {
        $new = clone $this;
        $new->Beleenbewijs_Beleensom = $Beleenbewijs_Beleensom;

        return $new;
    }

    /**
     * @return int
     */
    public function getVerlengen(): int
    {
        return $this->Verlengen;
    }

    /**
     * @param int $Verlengen
     * @return static
     */
    public function withVerlengen(int $Verlengen): static
    {
        $new = clone $this;
        $new->Verlengen = $Verlengen;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getNwBeleenbewijs_Einddatum(): \DateTimeInterface
    {
        return $this->NwBeleenbewijs_Einddatum;
    }

    /**
     * @param \DateTimeInterface $NwBeleenbewijs_Einddatum
     * @return static
     */
    public function withNwBeleenbewijs_Einddatum(\DateTimeInterface $NwBeleenbewijs_Einddatum): static
    {
        $new = clone $this;
        $new->NwBeleenbewijs_Einddatum = $NwBeleenbewijs_Einddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getNwBeleenbewijs_Rente(): float
    {
        return $this->NwBeleenbewijs_Rente;
    }

    /**
     * @param float $NwBeleenbewijs_Rente
     * @return static
     */
    public function withNwBeleenbewijs_Rente(float $NwBeleenbewijs_Rente): static
    {
        $new = clone $this;
        $new->NwBeleenbewijs_Rente = $NwBeleenbewijs_Rente;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentepercentage(): float
    {
        return $this->Rentepercentage;
    }

    /**
     * @param float $Rentepercentage
     * @return static
     */
    public function withRentepercentage(float $Rentepercentage): static
    {
        $new = clone $this;
        $new->Rentepercentage = $Rentepercentage;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalArtikelen(): int
    {
        return $this->AantalArtikelen;
    }

    /**
     * @param int $AantalArtikelen
     * @return static
     */
    public function withAantalArtikelen(int $AantalArtikelen): static
    {
        $new = clone $this;
        $new->AantalArtikelen = $AantalArtikelen;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijvingArtikelen(): string
    {
        return $this->OmschrijvingArtikelen;
    }

    /**
     * @param string $OmschrijvingArtikelen
     * @return static
     */
    public function withOmschrijvingArtikelen(string $OmschrijvingArtikelen): static
    {
        $new = clone $this;
        $new->OmschrijvingArtikelen = $OmschrijvingArtikelen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalTaxatieWaarde(): float
    {
        return $this->TotaalTaxatieWaarde;
    }

    /**
     * @param float $TotaalTaxatieWaarde
     * @return static
     */
    public function withTotaalTaxatieWaarde(float $TotaalTaxatieWaarde): static
    {
        $new = clone $this;
        $new->TotaalTaxatieWaarde = $TotaalTaxatieWaarde;

        return $new;
    }
}
