<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class CasusPVAProductArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusPVAProduct
     */
    private $TCasusPVAProduct;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusPVAProduct
     */
    public function getTCasusPVAProduct()
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusPVAProduct $TCasusPVAProduct
     * @return CasusPVAProductArray
     */
    public function withTCasusPVAProduct($TCasusPVAProduct)
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }
}

