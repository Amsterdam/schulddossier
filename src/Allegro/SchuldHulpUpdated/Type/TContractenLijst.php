<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TContractenLijst
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\ContractArray
     */
    private $Contracten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\ContractArray
     */
    public function getContracten()
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\ContractArray $Contracten
     * @return TContractenLijst
     */
    public function withContracten($Contracten)
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

