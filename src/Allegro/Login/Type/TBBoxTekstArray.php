<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBoxTekstArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst>
     */
    private array $TBBoxTekst;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst>
     */
    public function getTBBoxTekst() : array
    {
        return $this->TBBoxTekst;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst> $TBBoxTekst
     * @return static
     */
    public function withTBBoxTekst(array $TBBoxTekst) : static
    {
        $new = clone $this;
        $new->TBBoxTekst = $TBBoxTekst;

        return $new;
    }
}

