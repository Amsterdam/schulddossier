<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class RelatieProductArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRelatieProduct
     */
    private $TRelatieProduct;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRelatieProduct
     */
    public function getTRelatieProduct()
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRelatieProduct $TRelatieProduct
     * @return RelatieProductArray
     */
    public function withTRelatieProduct($TRelatieProduct)
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }
}

