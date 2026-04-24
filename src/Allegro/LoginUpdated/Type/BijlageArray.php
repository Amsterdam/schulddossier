<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class BijlageArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBijlage>
     */
    private array $TBijlage;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBijlage>
     */
    public function getTBijlage(): array
    {
        return $this->TBijlage;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBijlage> $TBijlage
     * @return static
     */
    public function withTBijlage(array $TBijlage): static
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}

