<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class BBRBegunstigdeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRBegunstigde
     */
    private $TBBRBegunstigde;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRBegunstigde
     */
    public function getTBBRBegunstigde()
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRBegunstigde $TBBRBegunstigde
     * @return BBRBegunstigdeArray
     */
    public function withTBBRBegunstigde($TBBRBegunstigde)
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }
}

