<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPRSMutatiesExtra
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\PRSMutatieExtraArray
     */
    private $Mutaties;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\PRSMutatieExtraArray
     */
    public function getMutaties()
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\PRSMutatieExtraArray $Mutaties
     * @return TPRSMutatiesExtra
     */
    public function withMutaties($Mutaties)
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }
}

