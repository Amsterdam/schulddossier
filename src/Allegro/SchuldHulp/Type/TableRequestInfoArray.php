<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo>
     */
    private array $TableRequestInfo;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo> $TableRequestInfo
     */
    public function __construct(array $TableRequestInfo)
    {
        $this->TableRequestInfo = $TableRequestInfo;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo>
     */
    public function getTableRequestInfo() : array
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo> $TableRequestInfo
     * @return static
     */
    public function withTableRequestInfo(array $TableRequestInfo) : static
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }
}

