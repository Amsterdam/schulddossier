<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class DKHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader>
     */
    private array $TDKHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader>
     */
    public function getTDKHeader() : array
    {
        return $this->TDKHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader> $TDKHeader
     * @return static
     */
    public function withTDKHeader(array $TDKHeader) : static
    {
        $new = clone $this;
        $new->TDKHeader = $TDKHeader;

        return $new;
    }
}

