<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class ContractArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContract>
     */
    private array $TContract;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContract>
     */
    public function getTContract(): array
    {
        return $this->TContract;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContract> $TContract
     * @return static
     */
    public function withTContract(array $TContract): static
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

