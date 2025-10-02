<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SBEiserArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser>
     */
    private array $TSBEiser;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser> $TSBEiser
     */
    public function __construct(array $TSBEiser)
    {
        $this->TSBEiser = $TSBEiser;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser>
     */
    public function getTSBEiser() : array
    {
        return $this->TSBEiser;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser> $TSBEiser
     * @return static
     */
    public function withTSBEiser(array $TSBEiser) : static
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }
}

