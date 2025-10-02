<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class InkomenArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen>
     */
    private array $TInkomen;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen> $TInkomen
     */
    public function __construct(array $TInkomen)
    {
        $this->TInkomen = $TInkomen;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen>
     */
    public function getTInkomen() : array
    {
        return $this->TInkomen;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen> $TInkomen
     * @return static
     */
    public function withTInkomen(array $TInkomen) : static
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}

