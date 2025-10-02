<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IntegerArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $int;

    /**
     * Constructor
     *
     * @param array<int<0,max>, int> $int
     */
    public function __construct(array $int)
    {
        $this->int = $int;
    }

    /**
     * @return array<int<0,max>, int>
     */
    public function getInt() : array
    {
        return $this->int;
    }

    /**
     * @param array<int<0,max>, int> $int
     * @return static
     */
    public function withInt(array $int) : static
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }
}

