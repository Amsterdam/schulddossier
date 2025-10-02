<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class KindArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TKind>
     */
    private array $TKind;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TKind>
     */
    public function getTKind() : array
    {
        return $this->TKind;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TKind> $TKind
     * @return static
     */
    public function withTKind(array $TKind) : static
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }
}

