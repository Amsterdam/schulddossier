<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSMutatiesPeriode implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStart;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumEinde;

    /**
     * @var float
     */
    private float $SaldoStart;

    /**
     * @var float
     */
    private float $SaldoEinde;

    /**
     * @var float
     */
    private float $TotaalAf;

    /**
     * @var float
     */
    private float $TotaalBij;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $PeriodeStart;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $PeriodeEinde;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     * @param \DateTimeInterface $DatumStart
     * @param \DateTimeInterface $DatumEinde
     * @param float $SaldoStart
     * @param float $SaldoEinde
     * @param float $TotaalAf
     * @param float $TotaalBij
     * @param \DateTimeInterface $PeriodeStart
     * @param \DateTimeInterface $PeriodeEinde
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties, \DateTimeInterface $DatumStart, \DateTimeInterface $DatumEinde, float $SaldoStart, float $SaldoEinde, float $TotaalAf, float $TotaalBij, \DateTimeInterface $PeriodeStart, \DateTimeInterface $PeriodeEinde)
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
    public function getMutaties() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     * @return static
     */
    public function withMutaties(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties) : static
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStart() : \DateTimeInterface
    {
        return $this->DatumStart;
    }

    /**
     * @param \DateTimeInterface $DatumStart
     * @return static
     */
    public function withDatumStart(\DateTimeInterface $DatumStart) : static
    {
        $new = clone $this;
        $new->DatumStart = $DatumStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumEinde() : \DateTimeInterface
    {
        return $this->DatumEinde;
    }

    /**
     * @param \DateTimeInterface $DatumEinde
     * @return static
     */
    public function withDatumEinde(\DateTimeInterface $DatumEinde) : static
    {
        $new = clone $this;
        $new->DatumEinde = $DatumEinde;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoStart() : float
    {
        return $this->SaldoStart;
    }

    /**
     * @param float $SaldoStart
     * @return static
     */
    public function withSaldoStart(float $SaldoStart) : static
    {
        $new = clone $this;
        $new->SaldoStart = $SaldoStart;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoEinde() : float
    {
        return $this->SaldoEinde;
    }

    /**
     * @param float $SaldoEinde
     * @return static
     */
    public function withSaldoEinde(float $SaldoEinde) : static
    {
        $new = clone $this;
        $new->SaldoEinde = $SaldoEinde;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalAf() : float
    {
        return $this->TotaalAf;
    }

    /**
     * @param float $TotaalAf
     * @return static
     */
    public function withTotaalAf(float $TotaalAf) : static
    {
        $new = clone $this;
        $new->TotaalAf = $TotaalAf;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalBij() : float
    {
        return $this->TotaalBij;
    }

    /**
     * @param float $TotaalBij
     * @return static
     */
    public function withTotaalBij(float $TotaalBij) : static
    {
        $new = clone $this;
        $new->TotaalBij = $TotaalBij;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeStart() : \DateTimeInterface
    {
        return $this->PeriodeStart;
    }

    /**
     * @param \DateTimeInterface $PeriodeStart
     * @return static
     */
    public function withPeriodeStart(\DateTimeInterface $PeriodeStart) : static
    {
        $new = clone $this;
        $new->PeriodeStart = $PeriodeStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeEinde() : \DateTimeInterface
    {
        return $this->PeriodeEinde;
    }

    /**
     * @param \DateTimeInterface $PeriodeEinde
     * @return static
     */
    public function withPeriodeEinde(\DateTimeInterface $PeriodeEinde) : static
    {
        $new = clone $this;
        $new->PeriodeEinde = $PeriodeEinde;

        return $new;
    }
}

