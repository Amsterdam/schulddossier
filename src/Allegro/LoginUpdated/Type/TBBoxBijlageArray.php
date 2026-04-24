<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBoxBijlageArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxBijlage>
     */
    private array $TBBoxBijlage;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxBijlage>
     */
    public function getTBBoxBijlage(): array
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxBijlage> $TBBoxBijlage
     * @return static
     */
    public function withTBBoxBijlage(array $TBBoxBijlage): static
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }
}

