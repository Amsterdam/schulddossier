<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class IntegerArray
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $int;

    /**
     * @return array<int<0,max>, int>
     */
    public function getInt() : array
    {
        return $this->int;
    }

    /**
     * @param array<int<0,max>, int> $int
     * @return static
     */
    public function withInt(array $int) : static
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }
}

