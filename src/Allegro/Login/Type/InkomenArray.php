<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class InkomenArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen>
     */
    private array $TInkomen;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen>
     */
    public function getTInkomen() : array
    {
        return $this->TInkomen;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen> $TInkomen
     * @return static
     */
    public function withTInkomen(array $TInkomen) : static
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}

