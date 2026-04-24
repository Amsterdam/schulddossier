<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SRVAanvraagHeaderArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader>
     */
    private array $TSRVAanvraagHeader;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader>
     */
    public function getTSRVAanvraagHeader(): array
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader> $TSRVAanvraagHeader
     * @return static
     */
    public function withTSRVAanvraagHeader(array $TSRVAanvraagHeader): static
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

