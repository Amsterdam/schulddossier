<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TExtraProductHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader>
     */
    private array $TExtraProductHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader>
     */
    public function getTExtraProductHeader() : array
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader> $TExtraProductHeader
     * @return static
     */
    public function withTExtraProductHeader(array $TExtraProductHeader) : static
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }
}

