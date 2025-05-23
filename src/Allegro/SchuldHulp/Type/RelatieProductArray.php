<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class RelatieProductArray implements RequestInterface
{

    /**
     * @var TRelatieProduct
     */
    private $TRelatieProduct;

    /**
     * Constructor
     *
     * @var TRelatieProduct $TRelatieProduct
     */
    public function __construct($TRelatieProduct)
    {
        $this->TRelatieProduct = $TRelatieProduct;
    }

    /**
     * @return TRelatieProduct
     */
    public function getTRelatieProduct()
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param TRelatieProduct $TRelatieProduct
     * @return RelatieProductArray
     */
    public function withTRelatieProduct($TRelatieProduct)
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }


}

