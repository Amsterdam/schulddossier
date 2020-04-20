<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSAfschriftReservering
{

    /**
     * @var int $VolgnummerReservering
     */
    protected $VolgnummerReservering = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var float $Saldo
     */
    protected $Saldo = null;

    /**
     * @param int $VolgnummerReservering
     * @param string $Omschrijving
     * @param float $Saldo
     */
    public function __construct($VolgnummerReservering, $Omschrijving, $Saldo)
    {
      $this->VolgnummerReservering = $VolgnummerReservering;
      $this->Omschrijving = $Omschrijving;
      $this->Saldo = $Saldo;
    }

    /**
     * @return int
     */
    public function getVolgnummerReservering()
    {
      return $this->VolgnummerReservering;
    }

    /**
     * @param int $VolgnummerReservering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftReservering
     */
    public function setVolgnummerReservering($VolgnummerReservering)
    {
      $this->VolgnummerReservering = $VolgnummerReservering;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
      return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftReservering
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return float
     */
    public function getSaldo()
    {
      return $this->Saldo;
    }

    /**
     * @param float $Saldo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftReservering
     */
    public function setSaldo($Saldo)
    {
      $this->Saldo = $Saldo;
      return $this;
    }

}
