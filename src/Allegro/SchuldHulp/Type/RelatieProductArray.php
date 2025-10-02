<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelatieProductArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct>
     */
    private array $TRelatieProduct;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct> $TRelatieProduct
     */
    public function __construct(array $TRelatieProduct)
    {
        $this->TRelatieProduct = $TRelatieProduct;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct>
     */
    public function getTRelatieProduct() : array
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct> $TRelatieProduct
     * @return static
     */
    public function withTRelatieProduct(array $TRelatieProduct) : static
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }
}

