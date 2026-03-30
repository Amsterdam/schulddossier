<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class ContractArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TContract
     */
    private $TContract;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TContract
     */
    public function getTContract()
    {
        return $this->TContract;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TContract $TContract
     * @return ContractArray
     */
    public function withTContract($TContract)
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

