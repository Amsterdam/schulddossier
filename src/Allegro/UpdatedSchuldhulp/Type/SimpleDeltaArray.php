<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SimpleDeltaArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDelta
     */
    private $SimpleDelta;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDelta
     */
    public function getSimpleDelta()
    {
        return $this->SimpleDelta;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDelta $SimpleDelta
     * @return SimpleDeltaArray
     */
    public function withSimpleDelta($SimpleDelta)
    {
        $new = clone $this;
        $new->SimpleDelta = $SimpleDelta;

        return $new;
    }
}

