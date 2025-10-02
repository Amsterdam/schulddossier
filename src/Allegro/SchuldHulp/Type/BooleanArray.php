<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BooleanArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, bool>
     */
    private array $boolean;

    /**
     * Constructor
     *
     * @param array<int<0,max>, bool> $boolean
     */
    public function __construct(array $boolean)
    {
        $this->boolean = $boolean;
    }

    /**
     * @return array<int<0,max>, bool>
     */
    public function getBoolean() : array
    {
        return $this->boolean;
    }

    /**
     * @param array<int<0,max>, bool> $boolean
     * @return static
     */
    public function withBoolean(array $boolean) : static
    {
        $new = clone $this;
        $new->boolean = $boolean;

        return $new;
    }
}

