<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SRVEiserArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVEiser
     */
    private $TSRVEiser;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVEiser
     */
    public function getTSRVEiser()
    {
        return $this->TSRVEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVEiser $TSRVEiser
     * @return SRVEiserArray
     */
    public function withTSRVEiser($TSRVEiser)
    {
        $new = clone $this;
        $new->TSRVEiser = $TSRVEiser;

        return $new;
    }
}

