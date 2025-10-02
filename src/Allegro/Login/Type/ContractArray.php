<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class ContractArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract>
     */
    private array $TContract;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract>
     */
    public function getTContract() : array
    {
        return $this->TContract;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract> $TContract
     * @return static
     */
    public function withTContract(array $TContract) : static
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

