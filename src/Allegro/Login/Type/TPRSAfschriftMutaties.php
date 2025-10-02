<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSAfschriftMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray $AfschriftMutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray
    {
        return $this->AfschriftMutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray $AfschriftMutaties
     * @return static
     */
    public function withAfschriftMutaties(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray $AfschriftMutaties) : static
    {
        $new = clone $this;
        $new->AfschriftMutaties = $AfschriftMutaties;

        return $new;
    }
}

