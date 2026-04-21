<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPRSAfschriftMutaties
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\PRSAfschriftMutatieArray
     */
    private $AfschriftMutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties()
    {
        return $this->AfschriftMutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\PRSAfschriftMutatieArray $AfschriftMutaties
     * @return TPRSAfschriftMutaties
     */
    public function withAfschriftMutaties($AfschriftMutaties)
    {
        $new = clone $this;
        $new->AfschriftMutaties = $AfschriftMutaties;

        return $new;
    }
}
