<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class RelatieProductArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct
     */
    private $TRelatieProduct;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct $TRelatieProduct
     */
    public function __construct($TRelatieProduct)
    {
        $this->TRelatieProduct = $TRelatieProduct;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct
     */
    public function getTRelatieProduct()
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct $TRelatieProduct
     * @return RelatieProductArray
     */
    public function withTRelatieProduct($TRelatieProduct)
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }


}

