<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TContractenLijst
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\ContractArray
     */
    private $Contracten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\ContractArray
     */
    public function getContracten()
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\ContractArray $Contracten
     * @return TContractenLijst
     */
    public function withContracten($Contracten)
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

