<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TPRSMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSMutatieArray
     */
    private $Mutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSMutatieArray
     */
    public function getMutaties()
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSMutatieArray $Mutaties
     * @return TPRSMutaties
     */
    public function withMutaties($Mutaties)
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }
}

