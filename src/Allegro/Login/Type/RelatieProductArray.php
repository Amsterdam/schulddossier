<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelatieProductArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct
     */
    private $TRelatieProduct;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct $TRelatieProduct
     */
    public function __construct($TRelatieProduct)
    {
        $this->TRelatieProduct = $TRelatieProduct;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct
     */
    public function getTRelatieProduct()
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct $TRelatieProduct
     * @return RelatieProductArray
     */
    public function withTRelatieProduct($TRelatieProduct)
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }


}

