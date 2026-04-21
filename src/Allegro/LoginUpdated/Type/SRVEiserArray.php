<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SRVEiserArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVEiser
     */
    private $TSRVEiser;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVEiser
     */
    public function getTSRVEiser()
    {
        return $this->TSRVEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVEiser $TSRVEiser
     * @return SRVEiserArray
     */
    public function withTSRVEiser($TSRVEiser)
    {
        $new = clone $this;
        $new->TSRVEiser = $TSRVEiser;

        return $new;
    }
}
