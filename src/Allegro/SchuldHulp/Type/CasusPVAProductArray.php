<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusPVAProductArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct>
     */
    private array $TCasusPVAProduct;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct> $TCasusPVAProduct
     */
    public function __construct(array $TCasusPVAProduct)
    {
        $this->TCasusPVAProduct = $TCasusPVAProduct;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct>
     */
    public function getTCasusPVAProduct() : array
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct> $TCasusPVAProduct
     * @return static
     */
    public function withTCasusPVAProduct(array $TCasusPVAProduct) : static
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }
}

