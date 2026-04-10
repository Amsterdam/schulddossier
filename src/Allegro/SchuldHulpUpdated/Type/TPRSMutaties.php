<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TPRSMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSMutatieArray
     */
    private $Mutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSMutatieArray
     */
    public function getMutaties()
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSMutatieArray $Mutaties
     * @return TPRSMutaties
     */
    public function withMutaties($Mutaties)
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }
}

