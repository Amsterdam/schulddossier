<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld>
     */
    private array $TSchuld;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld> $TSchuld
     */
    public function __construct(array $TSchuld)
    {
        $this->TSchuld = $TSchuld;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld>
     */
    public function getTSchuld() : array
    {
        return $this->TSchuld;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld> $TSchuld
     * @return static
     */
    public function withTSchuld(array $TSchuld) : static
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}

