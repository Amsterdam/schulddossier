<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SRVAanvraagHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVAanvraagHeader>
     */
    private array $TSRVAanvraagHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVAanvraagHeader>
     */
    public function getTSRVAanvraagHeader(): array
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVAanvraagHeader> $TSRVAanvraagHeader
     * @return static
     */
    public function withTSRVAanvraagHeader(array $TSRVAanvraagHeader): static
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

