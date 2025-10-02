<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftArray implements RequestInterface
{
    /**
     * Tbv. PRS Online Afschriften
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift>
     */
    private array $TPRSAfschrift;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift> $TPRSAfschrift
     */
    public function __construct(array $TPRSAfschrift)
    {
        $this->TPRSAfschrift = $TPRSAfschrift;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift>
     */
    public function getTPRSAfschrift() : array
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift> $TPRSAfschrift
     * @return static
     */
    public function withTPRSAfschrift(array $TPRSAfschrift) : static
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

