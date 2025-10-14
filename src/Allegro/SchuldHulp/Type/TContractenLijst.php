<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TContractenLijst
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
     */
    private $Contracten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
     */
    public function getContracten()
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten
     * @return TContractenLijst
     */
    public function withContracten($Contracten)
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

