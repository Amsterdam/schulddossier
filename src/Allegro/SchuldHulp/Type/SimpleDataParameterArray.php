<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataParameterArray implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter
     */
    private $SimpleDataParameter;

    /**
     * Constructor
     *
     * @var SimpleDataParameter $SimpleDataParameter
     */
    public function __construct($SimpleDataParameter)
    {
        $this->SimpleDataParameter = $SimpleDataParameter;
    }

    /**
     * @return SimpleDataParameter
     */
    public function getSimpleDataParameter()
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param SimpleDataParameter $SimpleDataParameter
     * @return SimpleDataParameterArray
     */
    public function withSimpleDataParameter($SimpleDataParameter)
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }


}

