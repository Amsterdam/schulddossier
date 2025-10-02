<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray $Mutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray
     */
    public function getMutaties() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray $Mutaties
     * @return static
     */
    public function withMutaties(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray $Mutaties) : static
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }
}

