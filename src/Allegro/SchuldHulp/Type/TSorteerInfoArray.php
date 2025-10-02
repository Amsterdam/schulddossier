<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSorteerInfoArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo>
     */
    private array $TSorteerInfo;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo> $TSorteerInfo
     */
    public function __construct(array $TSorteerInfo)
    {
        $this->TSorteerInfo = $TSorteerInfo;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo>
     */
    public function getTSorteerInfo() : array
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo> $TSorteerInfo
     * @return static
     */
    public function withTSorteerInfo(array $TSorteerInfo) : static
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }
}

