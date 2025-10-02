<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TContractenLijst
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray $Contracten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray
     */
    public function getContracten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray $Contracten
     * @return static
     */
    public function withContracten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray $Contracten) : static
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

