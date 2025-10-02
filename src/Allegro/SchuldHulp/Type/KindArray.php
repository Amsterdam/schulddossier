<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KindArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind>
     */
    private array $TKind;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind> $TKind
     */
    public function __construct(array $TKind)
    {
        $this->TKind = $TKind;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind>
     */
    public function getTKind() : array
    {
        return $this->TKind;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind> $TKind
     * @return static
     */
    public function withTKind(array $TKind) : static
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }
}

