<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TExtraProductHeaderArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TExtraProductHeader>
     */
    private array $TExtraProductHeader;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TExtraProductHeader>
     */
    public function getTExtraProductHeader(): array
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TExtraProductHeader> $TExtraProductHeader
     * @return static
     */
    public function withTExtraProductHeader(array $TExtraProductHeader): static
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }
}

