<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class BijlageArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBijlage
     */
    private $TBijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBijlage
     */
    public function getTBijlage()
    {
        return $this->TBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBijlage $TBijlage
     * @return BijlageArray
     */
    public function withTBijlage($TBijlage)
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}

