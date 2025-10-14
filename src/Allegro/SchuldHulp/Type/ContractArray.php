<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class ContractArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract
     */
    private $TContract;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract
     */
    public function getTContract()
    {
        return $this->TContract;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract $TContract
     * @return ContractArray
     */
    public function withTContract($TContract)
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

