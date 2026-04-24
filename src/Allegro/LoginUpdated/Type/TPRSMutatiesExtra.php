<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPRSMutatiesExtra
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSMutatieExtraArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSMutatieExtraArray $Mutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSMutatieExtraArray
     */
    public function getMutaties(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSMutatieExtraArray
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSMutatieExtraArray $Mutaties
     * @return static
     */
    public function withMutaties(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSMutatieExtraArray $Mutaties): static
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }
}

