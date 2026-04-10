<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class BBRVormArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRVorm
     */
    private $TBBRVorm;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRVorm
     */
    public function getTBBRVorm()
    {
        return $this->TBBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRVorm $TBBRVorm
     * @return BBRVormArray
     */
    public function withTBBRVorm($TBBRVorm)
    {
        $new = clone $this;
        $new->TBBRVorm = $TBBRVorm;

        return $new;
    }
}

