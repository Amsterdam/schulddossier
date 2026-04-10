<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class BBRBegunstigdeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRBegunstigde
     */
    private $TBBRBegunstigde;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRBegunstigde
     */
    public function getTBBRBegunstigde()
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRBegunstigde $TBBRBegunstigde
     * @return BBRBegunstigdeArray
     */
    public function withTBBRBegunstigde($TBBRBegunstigde)
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }
}

