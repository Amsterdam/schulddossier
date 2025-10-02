<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TContract2Array
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract2>
     */
    private array $TContract2;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract2>
     */
    public function getTContract2() : array
    {
        return $this->TContract2;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract2> $TContract2
     * @return static
     */
    public function withTContract2(array $TContract2) : static
    {
        $new = clone $this;
        $new->TContract2 = $TContract2;

        return $new;
    }
}

