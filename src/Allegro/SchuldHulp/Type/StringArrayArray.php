<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StringArrayArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray>
     */
    private array $StringArray;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray> $StringArray
     */
    public function __construct(array $StringArray)
    {
        $this->StringArray = $StringArray;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray>
     */
    public function getStringArray() : array
    {
        return $this->StringArray;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray> $StringArray
     * @return static
     */
    public function withStringArray(array $StringArray) : static
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}

