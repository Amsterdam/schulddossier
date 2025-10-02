<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DataParameterArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameter>
     */
    private array $DataParameter;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameter> $DataParameter
     */
    public function __construct(array $DataParameter)
    {
        $this->DataParameter = $DataParameter;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameter>
     */
    public function getDataParameter() : array
    {
        return $this->DataParameter;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameter> $DataParameter
     * @return static
     */
    public function withDataParameter(array $DataParameter) : static
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}

