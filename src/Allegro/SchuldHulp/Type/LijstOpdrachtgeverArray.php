<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LijstOpdrachtgeverArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever>
     */
    private array $TLijstOpdrachtgever;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever> $TLijstOpdrachtgever
     */
    public function __construct(array $TLijstOpdrachtgever)
    {
        $this->TLijstOpdrachtgever = $TLijstOpdrachtgever;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever>
     */
    public function getTLijstOpdrachtgever() : array
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever> $TLijstOpdrachtgever
     * @return static
     */
    public function withTLijstOpdrachtgever(array $TLijstOpdrachtgever) : static
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }
}

