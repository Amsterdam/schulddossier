<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LijstKredietsoortArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort>
     */
    private array $TLijstKredietsoort;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort> $TLijstKredietsoort
     */
    public function __construct(array $TLijstKredietsoort)
    {
        $this->TLijstKredietsoort = $TLijstKredietsoort;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort>
     */
    public function getTLijstKredietsoort() : array
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort> $TLijstKredietsoort
     * @return static
     */
    public function withTLijstKredietsoort(array $TLijstKredietsoort) : static
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

