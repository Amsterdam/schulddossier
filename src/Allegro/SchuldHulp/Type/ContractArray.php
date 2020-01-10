<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ContractArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract
     */
    private $TContract;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract $TContract
     */
    public function __construct($TContract)
    {
        $this->TContract = $TContract;
    }

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

