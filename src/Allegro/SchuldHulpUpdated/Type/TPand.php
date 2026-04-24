<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPand
{
    /**
     * @var int
     */
    private int $RelatieCode;

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
     * @return int
     */
    public function getRelatieCode(): int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode): static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

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
    public function getBeleenbewijsDatum(): \DateTimeInterface
    {
        return $this->Beleenbewijs_Datum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Datum
     * @return static
     */
    public function withBeleenbewijsDatum(\DateTimeInterface $Beleenbewijs_Datum): static
    {
        $new = clone $this;
        $new->Beleenbewijs_Datum = $Beleenbewijs_Datum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijsEinddatum(): \DateTimeInterface
    {
        return $this->Beleenbewijs_Einddatum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Einddatum
     * @return static
     */
    public function withBeleenbewijsEinddatum(\DateTimeInterface $Beleenbewijs_Einddatum): static
    {
        $new = clone $this;
        $new->Beleenbewijs_Einddatum = $Beleenbewijs_Einddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getBeleenbewijsBeleensom(): float
    {
        return $this->Beleenbewijs_Beleensom;
    }

    /**
     * @param float $Beleenbewijs_Beleensom
     * @return static
     */
    public function withBeleenbewijsBeleensom(float $Beleenbewijs_Beleensom): static
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
}

