<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class Int64Array
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $long;

    /**
     * @return array<int<0,max>, int>
     */
    public function getLong() : array
    {
        return $this->long;
    }

    /**
     * @param array<int<0,max>, int> $long
     * @return static
     */
    public function withLong(array $long) : static
    {
        $new = clone $this;
        $new->long = $long;

        return $new;
    }
}

