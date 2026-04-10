<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class ContractArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContract
     */
    private $TContract;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContract
     */
    public function getTContract()
    {
        return $this->TContract;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContract $TContract
     * @return ContractArray
     */
    public function withTContract($TContract)
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

