<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSMutatieArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutatie>
     */
    private array $TPRSMutatie;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutatie> $TPRSMutatie
     */
    public function __construct(array $TPRSMutatie)
    {
        $this->TPRSMutatie = $TPRSMutatie;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutatie>
     */
    public function getTPRSMutatie() : array
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutatie> $TPRSMutatie
     * @return static
     */
    public function withTPRSMutatie(array $TPRSMutatie) : static
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }
}

