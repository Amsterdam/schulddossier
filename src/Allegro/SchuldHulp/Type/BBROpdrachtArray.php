<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BBROpdrachtArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBROpdracht>
     */
    private array $TBBROpdracht;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBROpdracht> $TBBROpdracht
     */
    public function __construct(array $TBBROpdracht)
    {
        $this->TBBROpdracht = $TBBROpdracht;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBROpdracht>
     */
    public function getTBBROpdracht() : array
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBROpdracht> $TBBROpdracht
     * @return static
     */
    public function withTBBROpdracht(array $TBBROpdracht) : static
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }
}

