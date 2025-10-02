<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TExtraProductHeaderArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader>
     */
    private array $TExtraProductHeader;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader> $TExtraProductHeader
     */
    public function __construct(array $TExtraProductHeader)
    {
        $this->TExtraProductHeader = $TExtraProductHeader;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader>
     */
    public function getTExtraProductHeader() : array
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader> $TExtraProductHeader
     * @return static
     */
    public function withTExtraProductHeader(array $TExtraProductHeader) : static
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }
}

