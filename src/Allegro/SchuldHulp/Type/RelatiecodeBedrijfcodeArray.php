<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelatiecodeBedrijfcodeArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatiecodeBedrijfcode>
     */
    private array $TRelatiecodeBedrijfcode;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatiecodeBedrijfcode> $TRelatiecodeBedrijfcode
     */
    public function __construct(array $TRelatiecodeBedrijfcode)
    {
        $this->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatiecodeBedrijfcode>
     */
    public function getTRelatiecodeBedrijfcode() : array
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatiecodeBedrijfcode> $TRelatiecodeBedrijfcode
     * @return static
     */
    public function withTRelatiecodeBedrijfcode(array $TRelatiecodeBedrijfcode) : static
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}

