<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RCJaarrenteArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente>
     */
    private array $TRCJaarrente;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente> $TRCJaarrente
     */
    public function __construct(array $TRCJaarrente)
    {
        $this->TRCJaarrente = $TRCJaarrente;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente>
     */
    public function getTRCJaarrente() : array
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente> $TRCJaarrente
     * @return static
     */
    public function withTRCJaarrente(array $TRCJaarrente) : static
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}

