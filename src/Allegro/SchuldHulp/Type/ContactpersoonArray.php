<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ContactpersoonArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContactpersoon>
     */
    private array $TContactpersoon;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContactpersoon> $TContactpersoon
     */
    public function __construct(array $TContactpersoon)
    {
        $this->TContactpersoon = $TContactpersoon;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContactpersoon>
     */
    public function getTContactpersoon() : array
    {
        return $this->TContactpersoon;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContactpersoon> $TContactpersoon
     * @return static
     */
    public function withTContactpersoon(array $TContactpersoon) : static
    {
        $new = clone $this;
        $new->TContactpersoon = $TContactpersoon;

        return $new;
    }
}

