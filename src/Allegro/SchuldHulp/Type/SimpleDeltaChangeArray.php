<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDeltaChangeArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChange>
     */
    private array $SimpleDeltaChange;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChange> $SimpleDeltaChange
     */
    public function __construct(array $SimpleDeltaChange)
    {
        $this->SimpleDeltaChange = $SimpleDeltaChange;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChange>
     */
    public function getSimpleDeltaChange() : array
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChange> $SimpleDeltaChange
     * @return static
     */
    public function withSimpleDeltaChange(array $SimpleDeltaChange) : static
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }
}

