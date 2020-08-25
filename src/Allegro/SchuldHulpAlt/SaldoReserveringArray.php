<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SaldoReserveringArray
{

    /**
     * @var TSaldoReservering[] $TSaldoReservering
     */
    protected $TSaldoReservering = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSaldoReservering[]
     */
    public function getTSaldoReservering()
    {
      return $this->TSaldoReservering;
    }

    /**
     * @param TSaldoReservering[] $TSaldoReservering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SaldoReserveringArray
     */
    public function setTSaldoReservering(array $TSaldoReservering = null)
    {
      $this->TSaldoReservering = $TSaldoReservering;
      return $this;
    }

}
