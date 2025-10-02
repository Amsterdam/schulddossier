<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TRCJaarrente
{
    /**
     * @var int
     */
    private int $Jaar;

    /**
     * @var float
     */
    private float $RentePositief;

    /**
     * @var float
     */
    private float $RenteNegatief;

    /**
     * @return int
     */
    public function getJaar() : int
    {
        return $this->Jaar;
    }

    /**
     * @param int $Jaar
     * @return static
     */
    public function withJaar(int $Jaar) : static
    {
        $new = clone $this;
        $new->Jaar = $Jaar;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentePositief() : float
    {
        return $this->RentePositief;
    }

    /**
     * @param float $RentePositief
     * @return static
     */
    public function withRentePositief(float $RentePositief) : static
    {
        $new = clone $this;
        $new->RentePositief = $RentePositief;

        return $new;
    }

    /**
     * @return float
     */
    public function getRenteNegatief() : float
    {
        return $this->RenteNegatief;
    }

    /**
     * @param float $RenteNegatief
     * @return static
     */
    public function withRenteNegatief(float $RenteNegatief) : static
    {
        $new = clone $this;
        $new->RenteNegatief = $RenteNegatief;

        return $new;
    }
}

