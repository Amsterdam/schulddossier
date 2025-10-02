<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Int64Array implements RequestInterface
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $long;

    /**
     * Constructor
     *
     * @param array<int<0,max>, int> $long
     */
    public function __construct(array $long)
    {
        $this->long = $long;
    }

    /**
     * @return array<int<0,max>, int>
     */
    public function getLong() : array
    {
        return $this->long;
    }

    /**
     * @param array<int<0,max>, int> $long
     * @return static
     */
    public function withLong(array $long) : static
    {
        $new = clone $this;
        $new->long = $long;

        return $new;
    }
}

