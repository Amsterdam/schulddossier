<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class RCHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader>
     */
    private array $TRCHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader>
     */
    public function getTRCHeader() : array
    {
        return $this->TRCHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader> $TRCHeader
     * @return static
     */
    public function withTRCHeader(array $TRCHeader) : static
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}

