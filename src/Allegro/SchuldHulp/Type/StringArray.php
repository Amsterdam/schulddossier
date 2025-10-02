<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StringArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $string;

    /**
     * Constructor
     *
     * @param array<int<0,max>, string> $string
     */
    public function __construct(array $string)
    {
        $this->string = $string;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getString() : array
    {
        return $this->string;
    }

    /**
     * @param array<int<0,max>, string> $string
     * @return static
     */
    public function withString(array $string) : static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}

