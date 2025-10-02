<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleRequestInfoArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo>
     */
    private array $SimpleRequestInfo;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo> $SimpleRequestInfo
     */
    public function __construct(array $SimpleRequestInfo)
    {
        $this->SimpleRequestInfo = $SimpleRequestInfo;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo>
     */
    public function getSimpleRequestInfo() : array
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo> $SimpleRequestInfo
     * @return static
     */
    public function withSimpleRequestInfo(array $SimpleRequestInfo) : static
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }
}

