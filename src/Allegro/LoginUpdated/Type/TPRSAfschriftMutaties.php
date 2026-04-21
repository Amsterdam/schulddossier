<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPRSAfschriftMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray
     */
    private $AfschriftMutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties()
    {
        return $this->AfschriftMutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftMutatieArray $AfschriftMutaties
     * @return TPRSAfschriftMutaties
     */
    public function withAfschriftMutaties($AfschriftMutaties)
    {
        $new = clone $this;
        $new->AfschriftMutaties = $AfschriftMutaties;

        return $new;
    }
}
