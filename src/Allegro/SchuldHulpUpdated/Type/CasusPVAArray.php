<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class CasusPVAArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusPVA>
     */
    private array $TCasusPVA;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusPVA>
     */
    public function getTCasusPVA(): array
    {
        return $this->TCasusPVA;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusPVA> $TCasusPVA
     * @return static
     */
    public function withTCasusPVA(array $TCasusPVA): static
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }
}

