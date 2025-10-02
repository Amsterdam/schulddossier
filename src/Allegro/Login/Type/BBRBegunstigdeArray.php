<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class BBRBegunstigdeArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRBegunstigde>
     */
    private array $TBBRBegunstigde;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRBegunstigde>
     */
    public function getTBBRBegunstigde() : array
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRBegunstigde> $TBBRBegunstigde
     * @return static
     */
    public function withTBBRBegunstigde(array $TBBRBegunstigde) : static
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }
}

