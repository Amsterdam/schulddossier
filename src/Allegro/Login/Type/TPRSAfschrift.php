<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSAfschrift
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $VolgnummerAfschrift;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAfschrift;

    /**
     * Saldo Prs op moment vervaardiging afschrift
     *
     * @var float
     */
    private float $SaldoPrs;

    /**
     * Conform vervaardiging afschrift
     *
     * @var float
     */
    private float $TotaalBedragBijMutaties;

    /**
     * Conform vervaardiging afschrift
     *
     * @var float
     */
    private float $TotaalBedragAfMutaties;

    /**
     * Conform vervaardiging afschrift
     *
     * @var float
     */
    private float $TotaalInReserveringen;

    /**
     * Conform vervaardiging afschrift
     *
     * @var float
     */
    private float $TotaalUitReserveringen;

    /**
     * Totaal saldo reserveringen op moment vervaardiging afschrift
     *
     * @var float
     */
    private float $TotaalSaldoReserveringen;

    /**
     * @var float
     */
    private float $HuidigPrsSaldo;

    /**
     * @var float
     */
    private float $HuidigTotaalSaldoReserveringen;

    /**
     * @var float
     */
    private float $VorigSaldo;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $VorigDatumAfschift;

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
    public function getVolgnummerAfschrift() : int
    {
        return $this->VolgnummerAfschrift;
    }

    /**
     * @param int $VolgnummerAfschrift
     * @return static
     */
    public function withVolgnummerAfschrift(int $VolgnummerAfschrift) : static
    {
        $new = clone $this;
        $new->VolgnummerAfschrift = $VolgnummerAfschrift;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAfschrift() : \DateTimeInterface
    {
        return $this->DatumAfschrift;
    }

    /**
     * @param \DateTimeInterface $DatumAfschrift
     * @return static
     */
    public function withDatumAfschrift(\DateTimeInterface $DatumAfschrift) : static
    {
        $new = clone $this;
        $new->DatumAfschrift = $DatumAfschrift;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoPrs() : float
    {
        return $this->SaldoPrs;
    }

    /**
     * @param float $SaldoPrs
     * @return static
     */
    public function withSaldoPrs(float $SaldoPrs) : static
    {
        $new = clone $this;
        $new->SaldoPrs = $SaldoPrs;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalBedragBijMutaties() : float
    {
        return $this->TotaalBedragBijMutaties;
    }

    /**
     * @param float $TotaalBedragBijMutaties
     * @return static
     */
    public function withTotaalBedragBijMutaties(float $TotaalBedragBijMutaties) : static
    {
        $new = clone $this;
        $new->TotaalBedragBijMutaties = $TotaalBedragBijMutaties;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalBedragAfMutaties() : float
    {
        return $this->TotaalBedragAfMutaties;
    }

    /**
     * @param float $TotaalBedragAfMutaties
     * @return static
     */
    public function withTotaalBedragAfMutaties(float $TotaalBedragAfMutaties) : static
    {
        $new = clone $this;
        $new->TotaalBedragAfMutaties = $TotaalBedragAfMutaties;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalInReserveringen() : float
    {
        return $this->TotaalInReserveringen;
    }

    /**
     * @param float $TotaalInReserveringen
     * @return static
     */
    public function withTotaalInReserveringen(float $TotaalInReserveringen) : static
    {
        $new = clone $this;
        $new->TotaalInReserveringen = $TotaalInReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalUitReserveringen() : float
    {
        return $this->TotaalUitReserveringen;
    }

    /**
     * @param float $TotaalUitReserveringen
     * @return static
     */
    public function withTotaalUitReserveringen(float $TotaalUitReserveringen) : static
    {
        $new = clone $this;
        $new->TotaalUitReserveringen = $TotaalUitReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalSaldoReserveringen() : float
    {
        return $this->TotaalSaldoReserveringen;
    }

    /**
     * @param float $TotaalSaldoReserveringen
     * @return static
     */
    public function withTotaalSaldoReserveringen(float $TotaalSaldoReserveringen) : static
    {
        $new = clone $this;
        $new->TotaalSaldoReserveringen = $TotaalSaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuidigPrsSaldo() : float
    {
        return $this->HuidigPrsSaldo;
    }

    /**
     * @param float $HuidigPrsSaldo
     * @return static
     */
    public function withHuidigPrsSaldo(float $HuidigPrsSaldo) : static
    {
        $new = clone $this;
        $new->HuidigPrsSaldo = $HuidigPrsSaldo;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuidigTotaalSaldoReserveringen() : float
    {
        return $this->HuidigTotaalSaldoReserveringen;
    }

    /**
     * @param float $HuidigTotaalSaldoReserveringen
     * @return static
     */
    public function withHuidigTotaalSaldoReserveringen(float $HuidigTotaalSaldoReserveringen) : static
    {
        $new = clone $this;
        $new->HuidigTotaalSaldoReserveringen = $HuidigTotaalSaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getVorigSaldo() : float
    {
        return $this->VorigSaldo;
    }

    /**
     * @param float $VorigSaldo
     * @return static
     */
    public function withVorigSaldo(float $VorigSaldo) : static
    {
        $new = clone $this;
        $new->VorigSaldo = $VorigSaldo;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVorigDatumAfschift() : \DateTimeInterface
    {
        return $this->VorigDatumAfschift;
    }

    /**
     * @param \DateTimeInterface $VorigDatumAfschift
     * @return static
     */
    public function withVorigDatumAfschift(\DateTimeInterface $VorigDatumAfschift) : static
    {
        $new = clone $this;
        $new->VorigDatumAfschift = $VorigDatumAfschift;

        return $new;
    }
}

