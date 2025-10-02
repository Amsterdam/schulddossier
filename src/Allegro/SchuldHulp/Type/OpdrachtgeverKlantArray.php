<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OpdrachtgeverKlantArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant>
     */
    private array $TOpdrachtgeverKlant;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant> $TOpdrachtgeverKlant
     */
    public function __construct(array $TOpdrachtgeverKlant)
    {
        $this->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant>
     */
    public function getTOpdrachtgeverKlant() : array
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant> $TOpdrachtgeverKlant
     * @return static
     */
    public function withTOpdrachtgeverKlant(array $TOpdrachtgeverKlant) : static
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

