<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class BijlageArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage
     */
    private $TBijlage;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage $TBijlage
     */
    public function __construct($TBijlage)
    {
        $this->TBijlage = $TBijlage;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage
     */
    public function getTBijlage()
    {
        return $this->TBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage $TBijlage
     * @return BijlageArray
     */
    public function withTBijlage($TBijlage)
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }


}

