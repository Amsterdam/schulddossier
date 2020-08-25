<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSMutatiesPeriode
{

    /**
     * @var PRSMutatieArray $Mutaties
     */
    protected $Mutaties = null;

    /**
     * @var \DateTime $DatumStart
     */
    protected $DatumStart = null;

    /**
     * @var \DateTime $DatumEinde
     */
    protected $DatumEinde = null;

    /**
     * @var float $SaldoStart
     */
    protected $SaldoStart = null;

    /**
     * @var float $SaldoEinde
     */
    protected $SaldoEinde = null;

    /**
     * @var float $TotaalAf
     */
    protected $TotaalAf = null;

    /**
     * @var float $TotaalBij
     */
    protected $TotaalBij = null;

    /**
     * @var \DateTime $PeriodeStart
     */
    protected $PeriodeStart = null;

    /**
     * @var \DateTime $PeriodeEinde
     */
    protected $PeriodeEinde = null;

    /**
     * @param PRSMutatieArray $Mutaties
     * @param \DateTime $DatumStart
     * @param \DateTime $DatumEinde
     * @param float $SaldoStart
     * @param float $SaldoEinde
     * @param float $TotaalAf
     * @param float $TotaalBij
     * @param \DateTime $PeriodeStart
     * @param \DateTime $PeriodeEinde
     */
    public function __construct($Mutaties, \DateTime $DatumStart, \DateTime $DatumEinde, $SaldoStart, $SaldoEinde, $TotaalAf, $TotaalBij, \DateTime $PeriodeStart, \DateTime $PeriodeEinde)
    {
      $this->Mutaties = $Mutaties;
      $this->DatumStart = $DatumStart->format(\DateTime::ATOM);
      $this->DatumEinde = $DatumEinde->format(\DateTime::ATOM);
      $this->SaldoStart = $SaldoStart;
      $this->SaldoEinde = $SaldoEinde;
      $this->TotaalAf = $TotaalAf;
      $this->TotaalBij = $TotaalBij;
      $this->PeriodeStart = $PeriodeStart->format(\DateTime::ATOM);
      $this->PeriodeEinde = $PeriodeEinde->format(\DateTime::ATOM);
    }

    /**
     * @return PRSMutatieArray
     */
    public function getMutaties()
    {
      return $this->Mutaties;
    }

    /**
     * @param PRSMutatieArray $Mutaties
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setMutaties($Mutaties)
    {
      $this->Mutaties = $Mutaties;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStart()
    {
      if ($this->DatumStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStart
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setDatumStart(\DateTime $DatumStart)
    {
      $this->DatumStart = $DatumStart->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumEinde()
    {
      if ($this->DatumEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setDatumEinde(\DateTime $DatumEinde)
    {
      $this->DatumEinde = $DatumEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getSaldoStart()
    {
      return $this->SaldoStart;
    }

    /**
     * @param float $SaldoStart
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setSaldoStart($SaldoStart)
    {
      $this->SaldoStart = $SaldoStart;
      return $this;
    }

    /**
     * @return float
     */
    public function getSaldoEinde()
    {
      return $this->SaldoEinde;
    }

    /**
     * @param float $SaldoEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setSaldoEinde($SaldoEinde)
    {
      $this->SaldoEinde = $SaldoEinde;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotaalAf()
    {
      return $this->TotaalAf;
    }

    /**
     * @param float $TotaalAf
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setTotaalAf($TotaalAf)
    {
      $this->TotaalAf = $TotaalAf;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotaalBij()
    {
      return $this->TotaalBij;
    }

    /**
     * @param float $TotaalBij
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setTotaalBij($TotaalBij)
    {
      $this->TotaalBij = $TotaalBij;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeStart()
    {
      if ($this->PeriodeStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PeriodeStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PeriodeStart
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setPeriodeStart(\DateTime $PeriodeStart)
    {
      $this->PeriodeStart = $PeriodeStart->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodeEinde()
    {
      if ($this->PeriodeEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PeriodeEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PeriodeEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutatiesPeriode
     */
    public function setPeriodeEinde(\DateTime $PeriodeEinde)
    {
      $this->PeriodeEinde = $PeriodeEinde->format(\DateTime::ATOM);
      return $this;
    }

}
