<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TContractenLijst
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ContractArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ContractArray $Contracten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ContractArray
     */
    public function getContracten(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ContractArray
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ContractArray $Contracten
     * @return static
     */
    public function withContracten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ContractArray $Contracten): static
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

