<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class BBRBegunstigdeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRBegunstigde
     */
    private $TBBRBegunstigde;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRBegunstigde
     */
    public function getTBBRBegunstigde()
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRBegunstigde $TBBRBegunstigde
     * @return BBRBegunstigdeArray
     */
    public function withTBBRBegunstigde($TBBRBegunstigde)
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }
}

