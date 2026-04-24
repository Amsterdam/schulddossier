<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class RelatiecodeBedrijfcodeArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRelatiecodeBedrijfcode>
     */
    private array $TRelatiecodeBedrijfcode;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRelatiecodeBedrijfcode>
     */
    public function getTRelatiecodeBedrijfcode(): array
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRelatiecodeBedrijfcode> $TRelatiecodeBedrijfcode
     * @return static
     */
    public function withTRelatiecodeBedrijfcode(array $TRelatiecodeBedrijfcode): static
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}

