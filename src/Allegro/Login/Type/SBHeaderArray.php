<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SBHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader>
     */
    private array $TSBHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader>
     */
    public function getTSBHeader() : array
    {
        return $this->TSBHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader> $TSBHeader
     * @return static
     */
    public function withTSBHeader(array $TSBHeader) : static
    {
        $new = clone $this;
        $new->TSBHeader = $TSBHeader;

        return $new;
    }
}

