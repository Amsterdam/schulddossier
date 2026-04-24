<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPLAanvraag
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
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAanvraag;

    /**
     * @var 'PL' | 'SL' | 'SK'
     */
    private string $SoortLening;

    /**
     * @var int
     */
    private int $MedelenerCode;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var float
     */
    private float $GewenstKrediet;

    /**
     * @var 'A' | 'B' | 'C' | 'D' | 'E' | 'Gefiatteerd' | 'Afgewezen' | 'Ingetrokken'
     */
    private string $Status;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatus;

    /**
     * @var string
     */
    private string $RedenAfwijzing;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusA;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusB;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusC;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusD;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusE;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusAfIn;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusFiat;

    /**
     * @return int
     */
    public function getRelatiecode(): int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode): static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer(): int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer): static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAanvraag(): \DateTimeInterface
    {
        return $this->DatumAanvraag;
    }

    /**
     * @param \DateTimeInterface $DatumAanvraag
     * @return static
     */
    public function withDatumAanvraag(\DateTimeInterface $DatumAanvraag): static
    {
        $new = clone $this;
        $new->DatumAanvraag = $DatumAanvraag;

        return $new;
    }

    /**
     * @return 'PL' | 'SL' | 'SK'
     */
    public function getSoortLening(): string
    {
        return $this->SoortLening;
    }

    /**
     * @param 'PL' | 'SL' | 'SK' $SoortLening
     * @return static
     */
    public function withSoortLening(string $SoortLening): static
    {
        $new = clone $this;
        $new->SoortLening = $SoortLening;

        return $new;
    }

    /**
     * @return int
     */
    public function getMedelenerCode(): int
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return static
     */
    public function withMedelenerCode(int $MedelenerCode): static
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker(): string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker): static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstKrediet(): float
    {
        return $this->GewenstKrediet;
    }

    /**
     * @param float $GewenstKrediet
     * @return static
     */
    public function withGewenstKrediet(float $GewenstKrediet): static
    {
        $new = clone $this;
        $new->GewenstKrediet = $GewenstKrediet;

        return $new;
    }

    /**
     * @return 'A' | 'B' | 'C' | 'D' | 'E' | 'Gefiatteerd' | 'Afgewezen' | 'Ingetrokken'
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param 'A' | 'B' | 'C' | 'D' | 'E' | 'Gefiatteerd' | 'Afgewezen' | 'Ingetrokken' $Status
     * @return static
     */
    public function withStatus(string $Status): static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatus(): \DateTimeInterface
    {
        return $this->DatumStatus;
    }

    /**
     * @param \DateTimeInterface $DatumStatus
     * @return static
     */
    public function withDatumStatus(\DateTimeInterface $DatumStatus): static
    {
        $new = clone $this;
        $new->DatumStatus = $DatumStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getRedenAfwijzing(): string
    {
        return $this->RedenAfwijzing;
    }

    /**
     * @param string $RedenAfwijzing
     * @return static
     */
    public function withRedenAfwijzing(string $RedenAfwijzing): static
    {
        $new = clone $this;
        $new->RedenAfwijzing = $RedenAfwijzing;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusA(): \DateTimeInterface
    {
        return $this->DatumStatusA;
    }

    /**
     * @param \DateTimeInterface $DatumStatusA
     * @return static
     */
    public function withDatumStatusA(\DateTimeInterface $DatumStatusA): static
    {
        $new = clone $this;
        $new->DatumStatusA = $DatumStatusA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusB(): \DateTimeInterface
    {
        return $this->DatumStatusB;
    }

    /**
     * @param \DateTimeInterface $DatumStatusB
     * @return static
     */
    public function withDatumStatusB(\DateTimeInterface $DatumStatusB): static
    {
        $new = clone $this;
        $new->DatumStatusB = $DatumStatusB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusC(): \DateTimeInterface
    {
        return $this->DatumStatusC;
    }

    /**
     * @param \DateTimeInterface $DatumStatusC
     * @return static
     */
    public function withDatumStatusC(\DateTimeInterface $DatumStatusC): static
    {
        $new = clone $this;
        $new->DatumStatusC = $DatumStatusC;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusD(): \DateTimeInterface
    {
        return $this->DatumStatusD;
    }

    /**
     * @param \DateTimeInterface $DatumStatusD
     * @return static
     */
    public function withDatumStatusD(\DateTimeInterface $DatumStatusD): static
    {
        $new = clone $this;
        $new->DatumStatusD = $DatumStatusD;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusE(): \DateTimeInterface
    {
        return $this->DatumStatusE;
    }

    /**
     * @param \DateTimeInterface $DatumStatusE
     * @return static
     */
    public function withDatumStatusE(\DateTimeInterface $DatumStatusE): static
    {
        $new = clone $this;
        $new->DatumStatusE = $DatumStatusE;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusAfIn(): \DateTimeInterface
    {
        return $this->DatumStatusAfIn;
    }

    /**
     * @param \DateTimeInterface $DatumStatusAfIn
     * @return static
     */
    public function withDatumStatusAfIn(\DateTimeInterface $DatumStatusAfIn): static
    {
        $new = clone $this;
        $new->DatumStatusAfIn = $DatumStatusAfIn;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusFiat(): \DateTimeInterface
    {
        return $this->DatumStatusFiat;
    }

    /**
     * @param \DateTimeInterface $DatumStatusFiat
     * @return static
     */
    public function withDatumStatusFiat(\DateTimeInterface $DatumStatusFiat): static
    {
        $new = clone $this;
        $new->DatumStatusFiat = $DatumStatusFiat;

        return $new;
    }
}

