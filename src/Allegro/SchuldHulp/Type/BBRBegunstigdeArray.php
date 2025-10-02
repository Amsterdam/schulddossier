<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BBRBegunstigdeArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde>
     */
    private array $TBBRBegunstigde;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde> $TBBRBegunstigde
     */
    public function __construct(array $TBBRBegunstigde)
    {
        $this->TBBRBegunstigde = $TBBRBegunstigde;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde>
     */
    public function getTBBRBegunstigde() : array
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde> $TBBRBegunstigde
     * @return static
     */
    public function withTBBRBegunstigde(array $TBBRBegunstigde) : static
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }
}

