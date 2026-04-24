<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBoxHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxHeader>
     */
    private array $TBBoxHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxHeader>
     */
    public function getTBBoxHeader(): array
    {
        return $this->TBBoxHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxHeader> $TBBoxHeader
     * @return static
     */
    public function withTBBoxHeader(array $TBBoxHeader): static
    {
        $new = clone $this;
        $new->TBBoxHeader = $TBBoxHeader;

        return $new;
    }
}

