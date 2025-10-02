<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSAfschriftMutatie
{
    /**
     * Uniek volgnummer van de mutatie
     *
     * @var int
     */
    private int $VolgnummerMutatie;

    /**
     * Eventueel de relatiecode van het contract waarop de mutatie betrekking heeft.
     *
     * @var int
     */
    private int $Contractcode;

    /**
     * Eventueel het volgnummer van het contract waarop de mutatie betrekking heeft.
     *
     * @var int
     */
    private int $ContractVolgnummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumMutatie;

    /**
     * @var bool
     */
    private bool $IndicatieAf;

    /**
     * @var bool
     */
    private bool $IndicatieBij;

    /**
     * @var float
     */
    private float $Bedrag;

    /**
     * Afhankelijk van de waarde van bestaande parameter 757 van Allegro
     *  wordt in deze omschrijving de eventuele toevoeging 'BBR: ' weggelaten.
     *  Afhankelijk van de waarde van bestaande parameter 758 van Allegro
     *  wordt in deze omschrijving het eventuele saldo van een reservering
     *  al dan niet weggelaten.
     *
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var string
     */
    private string $Rekeningnummer;

    /**
     * @var string
     */
    private string $ExtraToelichting;

    /**
     * indicatie of dit een mutatie op een reservering betreft
     *  (in/uit reservering - van/naar prs: indien het een mutatie is
     *  uit een reservering die direct is doorbetaald, krijgt deze
     *  mutatie dus niet de indicatie 'reservering').
     *
     * @var bool
     */
    private bool $Reservering;

    /**
     * @return int
     */
    public function getVolgnummerMutatie() : int
    {
        return $this->VolgnummerMutatie;
    }

    /**
     * @param int $VolgnummerMutatie
     * @return static
     */
    public function withVolgnummerMutatie(int $VolgnummerMutatie) : static
    {
        $new = clone $this;
        $new->VolgnummerMutatie = $VolgnummerMutatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractcode() : int
    {
        return $this->Contractcode;
    }

    /**
     * @param int $Contractcode
     * @return static
     */
    public function withContractcode(int $Contractcode) : static
    {
        $new = clone $this;
        $new->Contractcode = $Contractcode;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer() : int
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return static
     */
    public function withContractVolgnummer(int $ContractVolgnummer) : static
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumMutatie() : \DateTimeInterface
    {
        return $this->DatumMutatie;
    }

    /**
     * @param \DateTimeInterface $DatumMutatie
     * @return static
     */
    public function withDatumMutatie(\DateTimeInterface $DatumMutatie) : static
    {
        $new = clone $this;
        $new->DatumMutatie = $DatumMutatie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieAf() : bool
    {
        return $this->IndicatieAf;
    }

    /**
     * @param bool $IndicatieAf
     * @return static
     */
    public function withIndicatieAf(bool $IndicatieAf) : static
    {
        $new = clone $this;
        $new->IndicatieAf = $IndicatieAf;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieBij() : bool
    {
        return $this->IndicatieBij;
    }

    /**
     * @param bool $IndicatieBij
     * @return static
     */
    public function withIndicatieBij(bool $IndicatieBij) : static
    {
        $new = clone $this;
        $new->IndicatieBij = $IndicatieBij;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedrag() : float
    {
        return $this->Bedrag;
    }

    /**
     * @param float $Bedrag
     * @return static
     */
    public function withBedrag(float $Bedrag) : static
    {
        $new = clone $this;
        $new->Bedrag = $Bedrag;

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
    public function getRekeningnummer() : string
    {
        return $this->Rekeningnummer;
    }

    /**
     * @param string $Rekeningnummer
     * @return static
     */
    public function withRekeningnummer(string $Rekeningnummer) : static
    {
        $new = clone $this;
        $new->Rekeningnummer = $Rekeningnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraToelichting() : string
    {
        return $this->ExtraToelichting;
    }

    /**
     * @param string $ExtraToelichting
     * @return static
     */
    public function withExtraToelichting(string $ExtraToelichting) : static
    {
        $new = clone $this;
        $new->ExtraToelichting = $ExtraToelichting;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReservering() : bool
    {
        return $this->Reservering;
    }

    /**
     * @param bool $Reservering
     * @return static
     */
    public function withReservering(bool $Reservering) : static
    {
        $new = clone $this;
        $new->Reservering = $Reservering;

        return $new;
    }
}

