<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class BijlageArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBijlage
     */
    private $TBijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBijlage
     */
    public function getTBijlage()
    {
        return $this->TBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBijlage $TBijlage
     * @return BijlageArray
     */
    public function withTBijlage($TBijlage)
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}

