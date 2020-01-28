<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class CasusPVAArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVA
     */
    private $TCasusPVA;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVA $TCasusPVA
     */
    public function __construct($TCasusPVA)
    {
        $this->TCasusPVA = $TCasusPVA;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVA
     */
    public function getTCasusPVA()
    {
        return $this->TCasusPVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVA $TCasusPVA
     * @return CasusPVAArray
     */
    public function withTCasusPVA($TCasusPVA)
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }


}

