<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class CasusNotitieArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusNotitie>
     */
    private array $TCasusNotitie;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusNotitie>
     */
    public function getTCasusNotitie() : array
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusNotitie> $TCasusNotitie
     * @return static
     */
    public function withTCasusNotitie(array $TCasusNotitie) : static
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }
}

