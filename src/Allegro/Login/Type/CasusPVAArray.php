<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class CasusPVAArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVA>
     */
    private array $TCasusPVA;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVA>
     */
    public function getTCasusPVA() : array
    {
        return $this->TCasusPVA;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVA> $TCasusPVA
     * @return static
     */
    public function withTCasusPVA(array $TCasusPVA) : static
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }
}

