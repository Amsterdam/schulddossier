<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSaldoReserveringen
{

    /**
     * @var SaldoReserveringArray $SaldoReserveringen
     */
    protected $SaldoReserveringen = null;

    /**
     * @var float $Totaal
     */
    protected $Totaal = null;

    /**
     * @param SaldoReserveringArray $SaldoReserveringen
     * @param float $Totaal
     */
    public function __construct($SaldoReserveringen, $Totaal)
    {
      $this->SaldoReserveringen = $SaldoReserveringen;
      $this->Totaal = $Totaal;
    }

    /**
     * @return SaldoReserveringArray
     */
    public function getSaldoReserveringen()
    {
      return $this->SaldoReserveringen;
    }

    /**
     * @param SaldoReserveringArray $SaldoReserveringen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSaldoReserveringen
     */
    public function setSaldoReserveringen($SaldoReserveringen)
    {
      $this->SaldoReserveringen = $SaldoReserveringen;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotaal()
    {
      return $this->Totaal;
    }

    /**
     * @param float $Totaal
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSaldoReserveringen
     */
    public function setTotaal($Totaal)
    {
      $this->Totaal = $Totaal;
      return $this;
    }

}
