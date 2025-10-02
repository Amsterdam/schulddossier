<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class BooleanArray
{
    /**
     * @var array<int<0,max>, bool>
     */
    private array $boolean;

    /**
     * @return array<int<0,max>, bool>
     */
    public function getBoolean() : array
    {
        return $this->boolean;
    }

    /**
     * @param array<int<0,max>, bool> $boolean
     * @return static
     */
    public function withBoolean(array $boolean) : static
    {
        $new = clone $this;
        $new->boolean = $boolean;

        return $new;
    }
}

