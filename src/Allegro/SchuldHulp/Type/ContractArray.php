<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ContractArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract>
     */
    private array $TContract;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract> $TContract
     */
    public function __construct(array $TContract)
    {
        $this->TContract = $TContract;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract>
     */
    public function getTContract() : array
    {
        return $this->TContract;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract> $TContract
     * @return static
     */
    public function withTContract(array $TContract) : static
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }
}

