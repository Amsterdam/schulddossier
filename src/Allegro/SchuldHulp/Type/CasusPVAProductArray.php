<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusPVAProductArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct
     */
    private $TCasusPVAProduct;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct $TCasusPVAProduct
     */
    public function __construct($TCasusPVAProduct)
    {
        $this->TCasusPVAProduct = $TCasusPVAProduct;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct
     */
    public function getTCasusPVAProduct()
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct $TCasusPVAProduct
     * @return CasusPVAProductArray
     */
    public function withTCasusPVAProduct($TCasusPVAProduct)
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }
}
