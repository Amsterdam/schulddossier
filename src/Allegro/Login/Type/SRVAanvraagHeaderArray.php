<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SRVAanvraagHeaderArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader>
     */
    private array $TSRVAanvraagHeader;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader>
     */
    public function getTSRVAanvraagHeader() : array
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader> $TSRVAanvraagHeader
     * @return static
     */
    public function withTSRVAanvraagHeader(array $TSRVAanvraagHeader) : static
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

