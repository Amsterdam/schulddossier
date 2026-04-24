<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBoxGeadresseerdeArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxGeadresseerde>
     */
    private array $TBBoxGeadresseerde;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxGeadresseerde>
     */
    public function getTBBoxGeadresseerde(): array
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxGeadresseerde> $TBBoxGeadresseerde
     * @return static
     */
    public function withTBBoxGeadresseerde(array $TBBoxGeadresseerde): static
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }
}

