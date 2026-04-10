<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class RelatieProductArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRelatieProduct
     */
    private $TRelatieProduct;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRelatieProduct
     */
    public function getTRelatieProduct()
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRelatieProduct $TRelatieProduct
     * @return RelatieProductArray
     */
    public function withTRelatieProduct($TRelatieProduct)
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }
}

