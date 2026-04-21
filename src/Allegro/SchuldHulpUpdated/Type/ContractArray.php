<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class ContractArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TContract
     */
    private $TContract;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TContract
     */
    public function getTContract()
    {
        return $this->TContract;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TContract $TContract
     * @return ContractArray
     */
    public function withTContract($TContract)
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

