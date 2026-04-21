<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SBEiserArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSBEiser
     */
    private $TSBEiser;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSBEiser
     */
    public function getTSBEiser()
    {
        return $this->TSBEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSBEiser $TSBEiser
     * @return SBEiserArray
     */
    public function withTSBEiser($TSBEiser)
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }
}

