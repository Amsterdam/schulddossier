<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPRSAfschriftMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray $AfschriftMutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray
    {
        return $this->AfschriftMutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray $AfschriftMutaties
     * @return static
     */
    public function withAfschriftMutaties(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray $AfschriftMutaties): static
    {
        $new = clone $this;
        $new->AfschriftMutaties = $AfschriftMutaties;

        return $new;
    }
}

