<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TContractenLijst
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ContractArray
     */
    private $Contracten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ContractArray
     */
    public function getContracten()
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ContractArray $Contracten
     * @return TContractenLijst
     */
    public function withContracten($Contracten)
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

