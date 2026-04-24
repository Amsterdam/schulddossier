<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPandBericht
{
    /**
     * @var string
     */
    private string $SoortMutatie;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Datum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Tijdstip;

    /**
     * @var string
     */
    private string $Pandnummer;

    /**
     * @var float
     */
    private float $BedragBetaald;

    /**
     * @var string
     */
    private string $iDealKenmerk;

    /**
     * @var float
     */
    private float $iDealTotaalBedrag;

    /**
     * @return string
     */
    public function getSoortMutatie(): string
    {
        return $this->SoortMutatie;
    }

    /**
     * @param string $SoortMutatie
     * @return static
     */
    public function withSoortMutatie(string $SoortMutatie): static
    {
        $new = clone $this;
        $new->SoortMutatie = $SoortMutatie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatum(): \DateTimeInterface
    {
        return $this->Datum;
    }

    /**
     * @param \DateTimeInterface $Datum
     * @return static
     */
    public function withDatum(\DateTimeInterface $Datum): static
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTijdstip(): \DateTimeInterface
    {
        return $this->Tijdstip;
    }

    /**
     * @param \DateTimeInterface $Tijdstip
     * @return static
     */
    public function withTijdstip(\DateTimeInterface $Tijdstip): static
    {
        $new = clone $this;
        $new->Tijdstip = $Tijdstip;

        return $new;
    }

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
     * @return float
     */
    public function getBedragBetaald(): float
    {
        return $this->BedragBetaald;
    }

    /**
     * @param float $BedragBetaald
     * @return static
     */
    public function withBedragBetaald(float $BedragBetaald): static
    {
        $new = clone $this;
        $new->BedragBetaald = $BedragBetaald;

        return $new;
    }

    /**
     * @return string
     */
    public function getIDealKenmerk(): string
    {
        return $this->iDealKenmerk;
    }

    /**
     * @param string $iDealKenmerk
     * @return static
     */
    public function withIDealKenmerk(string $iDealKenmerk): static
    {
        $new = clone $this;
        $new->iDealKenmerk = $iDealKenmerk;

        return $new;
    }

    /**
     * @return float
     */
    public function getIDealTotaalBedrag(): float
    {
        return $this->iDealTotaalBedrag;
    }

    /**
     * @param float $iDealTotaalBedrag
     * @return static
     */
    public function withIDealTotaalBedrag(float $iDealTotaalBedrag): static
    {
        $new = clone $this;
        $new->iDealTotaalBedrag = $iDealTotaalBedrag;

        return $new;
    }
}

