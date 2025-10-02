<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BijlageArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage>
     */
    private array $TBijlage;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage> $TBijlage
     */
    public function __construct(array $TBijlage)
    {
        $this->TBijlage = $TBijlage;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage>
     */
    public function getTBijlage() : array
    {
        return $this->TBijlage;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage> $TBijlage
     * @return static
     */
    public function withTBijlage(array $TBijlage) : static
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}

