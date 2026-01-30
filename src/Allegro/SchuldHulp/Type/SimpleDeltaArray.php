<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDeltaArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDelta
     */
    private $SimpleDelta;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDelta $SimpleDelta
     */
    public function __construct($SimpleDelta)
    {
        $this->SimpleDelta = $SimpleDelta;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDelta
     */
    public function getSimpleDelta()
    {
        return $this->SimpleDelta;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDelta $SimpleDelta
     * @return SimpleDeltaArray
     */
    public function withSimpleDelta($SimpleDelta)
    {
        $new = clone $this;
        $new->SimpleDelta = $SimpleDelta;

        return $new;
    }
}
