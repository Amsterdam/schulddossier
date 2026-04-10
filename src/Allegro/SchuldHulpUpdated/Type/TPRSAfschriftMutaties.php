<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TPRSAfschriftMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftMutatieArray
     */
    private $AfschriftMutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties()
    {
        return $this->AfschriftMutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftMutatieArray $AfschriftMutaties
     * @return TPRSAfschriftMutaties
     */
    public function withAfschriftMutaties($AfschriftMutaties)
    {
        $new = clone $this;
        $new->AfschriftMutaties = $AfschriftMutaties;

        return $new;
    }
}

