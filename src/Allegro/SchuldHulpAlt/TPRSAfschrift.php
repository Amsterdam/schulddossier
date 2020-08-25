<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSAfschrift
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $VolgnummerAfschrift
     */
    protected $VolgnummerAfschrift = null;

    /**
     * @var \DateTime $DatumAfschrift
     */
    protected $DatumAfschrift = null;

    /**
     * @var float $SaldoPrs
     */
    protected $SaldoPrs = null;

    /**
     * @var float $TotaalBedragBijMutaties
     */
    protected $TotaalBedragBijMutaties = null;

    /**
     * @var float $TotaalBedragAfMutaties
     */
    protected $TotaalBedragAfMutaties = null;

    /**
     * @var float $TotaalInReserveringen
     */
    protected $TotaalInReserveringen = null;

    /**
     * @var float $TotaalUitReserveringen
     */
    protected $TotaalUitReserveringen = null;

    /**
     * @var float $TotaalSaldoReserveringen
     */
    protected $TotaalSaldoReserveringen = null;

    /**
     * @var float $HuidigPrsSaldo
     */
    protected $HuidigPrsSaldo = null;

    /**
     * @var float $HuidigTotaalSaldoReserveringen
     */
    protected $HuidigTotaalSaldoReserveringen = null;

    /**
     * @var float $VorigSaldo
     */
    protected $VorigSaldo = null;

    /**
     * @var \DateTime $VorigDatumAfschift
     */
    protected $VorigDatumAfschift = null;

    /**
     * @param int $Relatiecode
     * @param int $VolgnummerAfschrift
     * @param \DateTime $DatumAfschrift
     * @param float $SaldoPrs
     * @param float $TotaalBedragBijMutaties
     * @param float $TotaalBedragAfMutaties
     * @param float $TotaalInReserveringen
     * @param float $TotaalUitReserveringen
     * @param float $TotaalSaldoReserveringen
     * @param float $HuidigPrsSaldo
     * @param float $HuidigTotaalSaldoReserveringen
     * @param float $VorigSaldo
     * @param \DateTime $VorigDatumAfschift
     */
    public function __construct($Relatiecode, $VolgnummerAfschrift, \DateTime $DatumAfschrift, $SaldoPrs, $TotaalBedragBijMutaties, $TotaalBedragAfMutaties, $TotaalInReserveringen, $TotaalUitReserveringen, $TotaalSaldoReserveringen, $HuidigPrsSaldo, $HuidigTotaalSaldoReserveringen, $VorigSaldo, \DateTime $VorigDatumAfschift)
    {
      $this->Relatiecode = $Relatiecode;
      $this->VolgnummerAfschrift = $VolgnummerAfschrift;
      $this->DatumAfschrift = $DatumAfschrift->format(\DateTime::ATOM);
      $this->SaldoPrs = $SaldoPrs;
      $this->TotaalBedragBijMutaties = $TotaalBedragBijMutaties;
      $this->TotaalBedragAfMutaties = $TotaalBedragAfMutaties;
      $this->TotaalInReserveringen = $TotaalInReserveringen;
      $this->TotaalUitReserveringen = $TotaalUitReserveringen;
      $this->TotaalSaldoReserveringen = $TotaalSaldoReserveringen;
      $this->HuidigPrsSaldo = $HuidigPrsSaldo;
      $this->HuidigTotaalSaldoReserveringen = $HuidigTotaalSaldoReserveringen;
      $this->VorigSaldo = $VorigSaldo;
      $this->VorigDatumAfschift = $VorigDatumAfschift->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setVolgnummerAfschrift($VolgnummerAfschrift)
    {
      $this->VolgnummerAfschrift = $VolgnummerAfschrift;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAfschrift()
    {
      if ($this->DatumAfschrift == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAfschrift);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAfschrift
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setDatumAfschrift(\DateTime $DatumAfschrift)
    {
      $this->DatumAfschrift = $DatumAfschrift->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setSaldoPrs($SaldoPrs)
    {
      $this->SaldoPrs = $SaldoPrs;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setTotaalBedragBijMutaties($TotaalBedragBijMutaties)
    {
      $this->TotaalBedragBijMutaties = $TotaalBedragBijMutaties;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setTotaalBedragAfMutaties($TotaalBedragAfMutaties)
    {
      $this->TotaalBedragAfMutaties = $TotaalBedragAfMutaties;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setTotaalInReserveringen($TotaalInReserveringen)
    {
      $this->TotaalInReserveringen = $TotaalInReserveringen;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setTotaalUitReserveringen($TotaalUitReserveringen)
    {
      $this->TotaalUitReserveringen = $TotaalUitReserveringen;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setTotaalSaldoReserveringen($TotaalSaldoReserveringen)
    {
      $this->TotaalSaldoReserveringen = $TotaalSaldoReserveringen;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setHuidigPrsSaldo($HuidigPrsSaldo)
    {
      $this->HuidigPrsSaldo = $HuidigPrsSaldo;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setHuidigTotaalSaldoReserveringen($HuidigTotaalSaldoReserveringen)
    {
      $this->HuidigTotaalSaldoReserveringen = $HuidigTotaalSaldoReserveringen;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setVorigSaldo($VorigSaldo)
    {
      $this->VorigSaldo = $VorigSaldo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getVorigDatumAfschift()
    {
      if ($this->VorigDatumAfschift == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->VorigDatumAfschift);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $VorigDatumAfschift
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschrift
     */
    public function setVorigDatumAfschift(\DateTime $VorigDatumAfschift)
    {
      $this->VorigDatumAfschift = $VorigDatumAfschift->format(\DateTime::ATOM);
      return $this;
    }

}
