<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class CasusPVAArray implements RequestInterface
{

    /**
     * @var TCasusPVA
     */
    private $TCasusPVA;

    /**
     * Constructor
     *
     * @var TCasusPVA $TCasusPVA
     */
    public function __construct($TCasusPVA)
    {
        $this->TCasusPVA = $TCasusPVA;
    }

    /**
     * @return TCasusPVA
     */
    public function getTCasusPVA()
    {
        return $this->TCasusPVA;
    }

    /**
     * @param TCasusPVA $TCasusPVA
     * @return CasusPVAArray
     */
    public function withTCasusPVA($TCasusPVA)
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }


}

