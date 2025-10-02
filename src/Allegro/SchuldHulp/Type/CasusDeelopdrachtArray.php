<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusDeelopdrachtArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusDeelopdracht>
     */
    private array $TCasusDeelopdracht;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusDeelopdracht> $TCasusDeelopdracht
     */
    public function __construct(array $TCasusDeelopdracht)
    {
        $this->TCasusDeelopdracht = $TCasusDeelopdracht;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusDeelopdracht>
     */
    public function getTCasusDeelopdracht() : array
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusDeelopdracht> $TCasusDeelopdracht
     * @return static
     */
    public function withTCasusDeelopdracht(array $TCasusDeelopdracht) : static
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }
}

