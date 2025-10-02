<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RCHeaderArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader>
     */
    private array $TRCHeader;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader> $TRCHeader
     */
    public function __construct(array $TRCHeader)
    {
        $this->TRCHeader = $TRCHeader;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader>
     */
    public function getTRCHeader() : array
    {
        return $this->TRCHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader> $TRCHeader
     * @return static
     */
    public function withTRCHeader(array $TRCHeader) : static
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}

