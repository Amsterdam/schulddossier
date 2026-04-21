<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class BijlageArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBijlage
     */
    private $TBijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBijlage
     */
    public function getTBijlage()
    {
        return $this->TBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBijlage $TBijlage
     * @return BijlageArray
     */
    public function withTBijlage($TBijlage)
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}
