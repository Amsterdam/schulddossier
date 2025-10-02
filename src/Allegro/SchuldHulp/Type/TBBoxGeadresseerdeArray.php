<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxGeadresseerdeArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde>
     */
    private array $TBBoxGeadresseerde;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde> $TBBoxGeadresseerde
     */
    public function __construct(array $TBBoxGeadresseerde)
    {
        $this->TBBoxGeadresseerde = $TBBoxGeadresseerde;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde>
     */
    public function getTBBoxGeadresseerde() : array
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde> $TBBoxGeadresseerde
     * @return static
     */
    public function withTBBoxGeadresseerde(array $TBBoxGeadresseerde) : static
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }
}

