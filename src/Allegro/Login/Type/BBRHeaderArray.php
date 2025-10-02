<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class BBRHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader>
     */
    private array $TBBRHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader>
     */
    public function getTBBRHeader() : array
    {
        return $this->TBBRHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader> $TBBRHeader
     * @return static
     */
    public function withTBBRHeader(array $TBBRHeader) : static
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }
}

