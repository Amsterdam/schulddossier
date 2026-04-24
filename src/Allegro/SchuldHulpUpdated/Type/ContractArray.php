<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class ContractArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TContract>
     */
    private array $TContract;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TContract>
     */
    public function getTContract(): array
    {
        return $this->TContract;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TContract> $TContract
     * @return static
     */
    public function withTContract(array $TContract): static
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

