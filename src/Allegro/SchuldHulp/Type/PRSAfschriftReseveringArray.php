<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftReseveringArray implements RequestInterface
{
    /**
     * tbv. PRS Online Afschrift reserveringen
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering>
     */
    private array $TPRSAfschriftReservering;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering> $TPRSAfschriftReservering
     */
    public function __construct(array $TPRSAfschriftReservering)
    {
        $this->TPRSAfschriftReservering = $TPRSAfschriftReservering;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering>
     */
    public function getTPRSAfschriftReservering() : array
    {
        return $this->TPRSAfschriftReservering;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering> $TPRSAfschriftReservering
     * @return static
     */
    public function withTPRSAfschriftReservering(array $TPRSAfschriftReservering) : static
    {
        $new = clone $this;
        $new->TPRSAfschriftReservering = $TPRSAfschriftReservering;

        return $new;
    }
}

