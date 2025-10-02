<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftMutatieArray implements RequestInterface
{
    /**
     * tbv. PRS Online Afschrift mutaties
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie>
     */
    private array $TPRSAfschriftMutatie;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie> $TPRSAfschriftMutatie
     */
    public function __construct(array $TPRSAfschriftMutatie)
    {
        $this->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie>
     */
    public function getTPRSAfschriftMutatie() : array
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie> $TPRSAfschriftMutatie
     * @return static
     */
    public function withTPRSAfschriftMutatie(array $TPRSAfschriftMutatie) : static
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }
}

