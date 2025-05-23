<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschrift implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $VolgnummerAfschrift;

    /**
     * @var DateTimeInterface
     */
    private $DatumAfschrift;

    /**
     * @var float
     */
    private $SaldoPrs;

    /**
     * @var float
     */
    private $TotaalBedragBijMutaties;

    /**
     * @var float
     */
    private $TotaalBedragAfMutaties;

    /**
     * @var float
     */
    private $TotaalInReserveringen;

    /**
     * @var float
     */
    private $TotaalUitReserveringen;

    /**
     * @var float
     */
    private $TotaalSaldoReserveringen;

    /**
     * @var float
     */
    private $HuidigPrsSaldo;

    /**
     * @var float
     */
    private $HuidigTotaalSaldoReserveringen;

    /**
     * @var float
     */
    private $VorigSaldo;

    /**
     * @var DateTimeInterface
     */
    private $VorigDatumAfschift;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $VolgnummerAfschrift
     * @var DateTimeInterface $DatumAfschrift
     * @var float $SaldoPrs
     * @var float $TotaalBedragBijMutaties
     * @var float $TotaalBedragAfMutaties
     * @var float $TotaalInReserveringen
     * @var float $TotaalUitReserveringen
     * @var float $TotaalSaldoReserveringen
     * @var float $HuidigPrsSaldo
     * @var float $HuidigTotaalSaldoReserveringen
     * @var float $VorigSaldo
     * @var DateTimeInterface $VorigDatumAfschift
     */
    public function __construct($Relatiecode, $VolgnummerAfschrift, $DatumAfschrift, $SaldoPrs, $TotaalBedragBijMutaties, $TotaalBedragAfMutaties, $TotaalInReserveringen, $TotaalUitReserveringen, $TotaalSaldoReserveringen, $HuidigPrsSaldo, $HuidigTotaalSaldoReserveringen, $VorigSaldo, $VorigDatumAfschift)
    {
        $this->Relatiecode = $Relatiecode;
        $this->VolgnummerAfschrift = $VolgnummerAfschrift;
        $this->DatumAfschrift = $DatumAfschrift;
        $this->SaldoPrs = $SaldoPrs;
        $this->TotaalBedragBijMutaties = $TotaalBedragBijMutaties;
        $this->TotaalBedragAfMutaties = $TotaalBedragAfMutaties;
        $this->TotaalInReserveringen = $TotaalInReserveringen;
        $this->TotaalUitReserveringen = $TotaalUitReserveringen;
        $this->TotaalSaldoReserveringen = $TotaalSaldoReserveringen;
        $this->HuidigPrsSaldo = $HuidigPrsSaldo;
        $this->HuidigTotaalSaldoReserveringen = $HuidigTotaalSaldoReserveringen;
        $this->VorigSaldo = $VorigSaldo;
        $this->VorigDatumAfschift = $VorigDatumAfschift;
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
     * @return TPRSAfschrift
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
    public function getVolgnummerAfschrift()
    {
        return $this->VolgnummerAfschrift;
    }

    /**
     * @param int $VolgnummerAfschrift
     * @return TPRSAfschrift
     */
    public function withVolgnummerAfschrift($VolgnummerAfschrift)
    {
        $new = clone $this;
        $new->VolgnummerAfschrift = $VolgnummerAfschrift;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDatumAfschrift()
    {
        return $this->DatumAfschrift;
    }

    /**
     * @param DateTimeInterface $DatumAfschrift
     * @return TPRSAfschrift
     */
    public function withDatumAfschrift($DatumAfschrift)
    {
        $new = clone $this;
        $new->DatumAfschrift = $DatumAfschrift;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoPrs()
    {
        return $this->SaldoPrs;
    }

    /**
     * @param float $SaldoPrs
     * @return TPRSAfschrift
     */
    public function withSaldoPrs($SaldoPrs)
    {
        $new = clone $this;
        $new->SaldoPrs = $SaldoPrs;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalBedragBijMutaties()
    {
        return $this->TotaalBedragBijMutaties;
    }

    /**
     * @param float $TotaalBedragBijMutaties
     * @return TPRSAfschrift
     */
    public function withTotaalBedragBijMutaties($TotaalBedragBijMutaties)
    {
        $new = clone $this;
        $new->TotaalBedragBijMutaties = $TotaalBedragBijMutaties;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalBedragAfMutaties()
    {
        return $this->TotaalBedragAfMutaties;
    }

    /**
     * @param float $TotaalBedragAfMutaties
     * @return TPRSAfschrift
     */
    public function withTotaalBedragAfMutaties($TotaalBedragAfMutaties)
    {
        $new = clone $this;
        $new->TotaalBedragAfMutaties = $TotaalBedragAfMutaties;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalInReserveringen()
    {
        return $this->TotaalInReserveringen;
    }

    /**
     * @param float $TotaalInReserveringen
     * @return TPRSAfschrift
     */
    public function withTotaalInReserveringen($TotaalInReserveringen)
    {
        $new = clone $this;
        $new->TotaalInReserveringen = $TotaalInReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalUitReserveringen()
    {
        return $this->TotaalUitReserveringen;
    }

    /**
     * @param float $TotaalUitReserveringen
     * @return TPRSAfschrift
     */
    public function withTotaalUitReserveringen($TotaalUitReserveringen)
    {
        $new = clone $this;
        $new->TotaalUitReserveringen = $TotaalUitReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalSaldoReserveringen()
    {
        return $this->TotaalSaldoReserveringen;
    }

    /**
     * @param float $TotaalSaldoReserveringen
     * @return TPRSAfschrift
     */
    public function withTotaalSaldoReserveringen($TotaalSaldoReserveringen)
    {
        $new = clone $this;
        $new->TotaalSaldoReserveringen = $TotaalSaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuidigPrsSaldo()
    {
        return $this->HuidigPrsSaldo;
    }

    /**
     * @param float $HuidigPrsSaldo
     * @return TPRSAfschrift
     */
    public function withHuidigPrsSaldo($HuidigPrsSaldo)
    {
        $new = clone $this;
        $new->HuidigPrsSaldo = $HuidigPrsSaldo;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuidigTotaalSaldoReserveringen()
    {
        return $this->HuidigTotaalSaldoReserveringen;
    }

    /**
     * @param float $HuidigTotaalSaldoReserveringen
     * @return TPRSAfschrift
     */
    public function withHuidigTotaalSaldoReserveringen($HuidigTotaalSaldoReserveringen)
    {
        $new = clone $this;
        $new->HuidigTotaalSaldoReserveringen = $HuidigTotaalSaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getVorigSaldo()
    {
        return $this->VorigSaldo;
    }

    /**
     * @param float $VorigSaldo
     * @return TPRSAfschrift
     */
    public function withVorigSaldo($VorigSaldo)
    {
        $new = clone $this;
        $new->VorigSaldo = $VorigSaldo;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getVorigDatumAfschift()
    {
        return $this->VorigDatumAfschift;
    }

    /**
     * @param DateTimeInterface $VorigDatumAfschift
     * @return TPRSAfschrift
     */
    public function withVorigDatumAfschift($VorigDatumAfschift)
    {
        $new = clone $this;
        $new->VorigDatumAfschift = $VorigDatumAfschift;

        return $new;
    }


}

