<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusPVAProductArray implements RequestInterface
{

    /**
     * @var TCasusPVAProduct
     */
    private $TCasusPVAProduct;

    /**
     * Constructor
     *
     * @var TCasusPVAProduct $TCasusPVAProduct
     */
    public function __construct($TCasusPVAProduct)
    {
        $this->TCasusPVAProduct = $TCasusPVAProduct;
    }

    /**
     * @return TCasusPVAProduct
     */
    public function getTCasusPVAProduct()
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param TCasusPVAProduct $TCasusPVAProduct
     * @return CasusPVAProductArray
     */
    public function withTCasusPVAProduct($TCasusPVAProduct)
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }


}

