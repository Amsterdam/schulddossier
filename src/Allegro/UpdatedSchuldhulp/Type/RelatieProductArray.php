<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class RelatieProductArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRelatieProduct
     */
    private $TRelatieProduct;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRelatieProduct
     */
    public function getTRelatieProduct()
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRelatieProduct $TRelatieProduct
     * @return RelatieProductArray
     */
    public function withTRelatieProduct($TRelatieProduct)
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }
}

