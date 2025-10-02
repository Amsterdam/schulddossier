<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class BijlageArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBijlage>
     */
    private array $TBijlage;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBijlage>
     */
    public function getTBijlage() : array
    {
        return $this->TBijlage;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBijlage> $TBijlage
     * @return static
     */
    public function withTBijlage(array $TBijlage) : static
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}

