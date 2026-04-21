<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleFieldInfoArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfo
     */
    private $SimpleFieldInfo;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfo $SimpleFieldInfo
     */
    public function __construct($SimpleFieldInfo)
    {
        $this->SimpleFieldInfo = $SimpleFieldInfo;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfo
     */
    public function getSimpleFieldInfo()
    {
        return $this->SimpleFieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfo $SimpleFieldInfo
     * @return SimpleFieldInfoArray
     */
    public function withSimpleFieldInfo($SimpleFieldInfo)
    {
        $new = clone $this;
        $new->SimpleFieldInfo = $SimpleFieldInfo;

        return $new;
    }
}
