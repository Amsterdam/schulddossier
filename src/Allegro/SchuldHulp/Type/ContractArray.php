<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ContractArray implements RequestInterface
{

    /**
     * @var TContract
     */
    private $TContract;

    /**
     * Constructor
     *
     * @var TContract $TContract
     */
    public function __construct($TContract)
    {
        $this->TContract = $TContract;
    }

    /**
     * @return TContract
     */
    public function getTContract()
    {
        return $this->TContract;
    }

    /**
     * @param TContract $TContract
     * @return ContractArray
     */
    public function withTContract($TContract)
    {
        $new = clone $this;
        $new->TContract = $TContract;

        return $new;
    }


}

