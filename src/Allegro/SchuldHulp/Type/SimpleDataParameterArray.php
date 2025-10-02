<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataParameterArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter>
     */
    private array $SimpleDataParameter;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter> $SimpleDataParameter
     */
    public function __construct(array $SimpleDataParameter)
    {
        $this->SimpleDataParameter = $SimpleDataParameter;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter>
     */
    public function getSimpleDataParameter() : array
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter> $SimpleDataParameter
     * @return static
     */
    public function withSimpleDataParameter(array $SimpleDataParameter) : static
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }
}

