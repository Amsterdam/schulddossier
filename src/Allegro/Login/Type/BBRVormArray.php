<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class BBRVormArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm>
     */
    private array $TBBRVorm;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm>
     */
    public function getTBBRVorm() : array
    {
        return $this->TBBRVorm;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm> $TBBRVorm
     * @return static
     */
    public function withTBBRVorm(array $TBBRVorm) : static
    {
        $new = clone $this;
        $new->TBBRVorm = $TBBRVorm;

        return $new;
    }
}

