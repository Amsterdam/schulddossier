<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class VariantArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $anyType;

    /**
     * Constructor
     *
     * @param array<int<0,max>, mixed> $anyType
     */
    public function __construct(array $anyType)
    {
        $this->anyType = $anyType;
    }

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getAnyType() : array
    {
        return $this->anyType;
    }

    /**
     * @param array<int<0,max>, mixed> $anyType
     * @return static
     */
    public function withAnyType(array $anyType) : static
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}

