<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class BijlageArray implements RequestInterface
{

    /**
     * @var TBijlage
     */
    private $TBijlage;

    /**
     * Constructor
     *
     * @var TBijlage $TBijlage
     */
    public function __construct($TBijlage)
    {
        $this->TBijlage = $TBijlage;
    }

    /**
     * @return TBijlage
     */
    public function getTBijlage()
    {
        return $this->TBijlage;
    }

    /**
     * @param TBijlage $TBijlage
     * @return BijlageArray
     */
    public function withTBijlage($TBijlage)
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }


}

