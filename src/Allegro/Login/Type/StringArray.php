<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class StringArray
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $string;

    /**
     * @return array<int<0,max>, string>
     */
    public function getString() : array
    {
        return $this->string;
    }

    /**
     * @param array<int<0,max>, string> $string
     * @return static
     */
    public function withString(array $string) : static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}

