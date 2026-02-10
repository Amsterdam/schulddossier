<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SBEiserArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser
     */
    private $TSBEiser;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser $TSBEiser
     */
    public function __construct($TSBEiser)
    {
        $this->TSBEiser = $TSBEiser;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser
     */
    public function getTSBEiser()
    {
        return $this->TSBEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser $TSBEiser
     * @return SBEiserArray
     */
    public function withTSBEiser($TSBEiser)
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }
}
