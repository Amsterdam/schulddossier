<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBoxGeadresseerdeArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxGeadresseerde>
     */
    private array $TBBoxGeadresseerde;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxGeadresseerde>
     */
    public function getTBBoxGeadresseerde() : array
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxGeadresseerde> $TBBoxGeadresseerde
     * @return static
     */
    public function withTBBoxGeadresseerde(array $TBBoxGeadresseerde) : static
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }
}

