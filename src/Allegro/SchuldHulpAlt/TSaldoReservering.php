<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSaldoReservering
{

    /**
     * @var \DateTime $Datum
     */
    protected $Datum = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var float $Saldo
     */
    protected $Saldo = null;

    /**
     * @param \DateTime $Datum
     * @param int $Volgnummer
     * @param string $Omschrijving
     * @param float $Saldo
     */
    public function __construct(\DateTime $Datum, $Volgnummer, $Omschrijving, $Saldo)
    {
      $this->Datum = $Datum->format(\DateTime::ATOM);
      $this->Volgnummer = $Volgnummer;
      $this->Omschrijving = $Omschrijving;
      $this->Saldo = $Saldo;
    }

    /**
     * @return \DateTime
     */
    public function getDatum()
    {
      if ($this->Datum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Datum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Datum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSaldoReservering
     */
    public function setDatum(\DateTime $Datum)
    {
      $this->Datum = $Datum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
      return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSaldoReservering
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSaldoReservering
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSaldoReservering
     */
    public function setSaldo($Saldo)
    {
      $this->Saldo = $Saldo;
      return $this;
    }

}
