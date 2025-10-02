<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class RCJaarrenteArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCJaarrente>
     */
    private array $TRCJaarrente;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCJaarrente>
     */
    public function getTRCJaarrente() : array
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCJaarrente> $TRCJaarrente
     * @return static
     */
    public function withTRCJaarrente(array $TRCJaarrente) : static
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}

