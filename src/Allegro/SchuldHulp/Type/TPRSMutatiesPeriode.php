<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TPRSMutatiesPeriode implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    private $Mutaties;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStart;

    /**
     * @var \DateTimeInterface
     */
    private $DatumEinde;

    /**
     * @var float
     */
    private $SaldoStart;

    /**
     * @var float
     */
    private $SaldoEinde;

    /**
     * @var float
     */
    private $TotaalAf;

    /**
     * @var float
     */
    private $TotaalBij;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeStart;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeEinde;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     * @var \DateTimeInterface $DatumStart
     * @var \DateTimeInterface $DatumEinde
     * @var float $SaldoStart
     * @var float $SaldoEinde
     * @var float $TotaalAf
     * @var float $TotaalBij
     * @var \DateTimeInterface $PeriodeStart
     * @var \DateTimeInterface $PeriodeEinde
     */
    public function __construct($Mutaties, $DatumStart, $DatumEinde, $SaldoStart, $SaldoEinde, $TotaalAf, $TotaalBij, $PeriodeStart, $PeriodeEinde)
    {
        $this->Mutaties = $Mutaties;
        $this->DatumStart = $DatumStart;
        $this->DatumEinde = $DatumEinde;
        $this->SaldoStart = $SaldoStart;
        $this->SaldoEinde = $SaldoEinde;
        $this->TotaalAf = $TotaalAf;
        $this->TotaalBij = $TotaalBij;
        $this->PeriodeStart = $PeriodeStart;
        $this->PeriodeEinde = $PeriodeEinde;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    public function getMutaties()
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     * @return TPRSMutatiesPeriode
     */
    public function withMutaties($Mutaties)
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStart()
    {
        return $this->DatumStart;
    }

    /**
     * @param \DateTimeInterface $DatumStart
     * @return TPRSMutatiesPeriode
     */
    public function withDatumStart($DatumStart)
    {
        $new = clone $this;
        $new->DatumStart = $DatumStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumEinde()
    {
        return $this->DatumEinde;
    }

    /**
     * @param \DateTimeInterface $DatumEinde
     * @return TPRSMutatiesPeriode
     */
    public function withDatumEinde($DatumEinde)
    {
        $new = clone $this;
        $new->DatumEinde = $DatumEinde;

        return $new;
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
     * @return TPRSMutatiesPeriode
     */
    public function withSaldoStart($SaldoStart)
    {
        $new = clone $this;
        $new->SaldoStart = $SaldoStart;

        return $new;
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
     * @return TPRSMutatiesPeriode
     */
    public function withSaldoEinde($SaldoEinde)
    {
        $new = clone $this;
        $new->SaldoEinde = $SaldoEinde;

        return $new;
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
     * @return TPRSMutatiesPeriode
     */
    public function withTotaalAf($TotaalAf)
    {
        $new = clone $this;
        $new->TotaalAf = $TotaalAf;

        return $new;
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
     * @return TPRSMutatiesPeriode
     */
    public function withTotaalBij($TotaalBij)
    {
        $new = clone $this;
        $new->TotaalBij = $TotaalBij;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeStart()
    {
        return $this->PeriodeStart;
    }

    /**
     * @param \DateTimeInterface $PeriodeStart
     * @return TPRSMutatiesPeriode
     */
    public function withPeriodeStart($PeriodeStart)
    {
        $new = clone $this;
        $new->PeriodeStart = $PeriodeStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeEinde()
    {
        return $this->PeriodeEinde;
    }

    /**
     * @param \DateTimeInterface $PeriodeEinde
     * @return TPRSMutatiesPeriode
     */
    public function withPeriodeEinde($PeriodeEinde)
    {
        $new = clone $this;
        $new->PeriodeEinde = $PeriodeEinde;

        return $new;
    }


}

