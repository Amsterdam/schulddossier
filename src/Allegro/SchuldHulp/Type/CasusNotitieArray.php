<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusNotitieArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie>
     */
    private array $TCasusNotitie;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie> $TCasusNotitie
     */
    public function __construct(array $TCasusNotitie)
    {
        $this->TCasusNotitie = $TCasusNotitie;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie>
     */
    public function getTCasusNotitie() : array
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie> $TCasusNotitie
     * @return static
     */
    public function withTCasusNotitie(array $TCasusNotitie) : static
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }
}

