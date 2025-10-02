<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxBijlageArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage>
     */
    private array $TBBoxBijlage;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage> $TBBoxBijlage
     */
    public function __construct(array $TBBoxBijlage)
    {
        $this->TBBoxBijlage = $TBBoxBijlage;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage>
     */
    public function getTBBoxBijlage() : array
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage> $TBBoxBijlage
     * @return static
     */
    public function withTBBoxBijlage(array $TBBoxBijlage) : static
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }
}

