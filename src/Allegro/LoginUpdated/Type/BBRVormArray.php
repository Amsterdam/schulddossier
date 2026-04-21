<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class BBRVormArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRVorm
     */
    private $TBBRVorm;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRVorm
     */
    public function getTBBRVorm()
    {
        return $this->TBBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRVorm $TBBRVorm
     * @return BBRVormArray
     */
    public function withTBBRVorm($TBBRVorm)
    {
        $new = clone $this;
        $new->TBBRVorm = $TBBRVorm;

        return $new;
    }
}

