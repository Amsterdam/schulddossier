<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class PLHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLHeader>
     */
    private array $TPLHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLHeader>
     */
    public function getTPLHeader() : array
    {
        return $this->TPLHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLHeader> $TPLHeader
     * @return static
     */
    public function withTPLHeader(array $TPLHeader) : static
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }
}

