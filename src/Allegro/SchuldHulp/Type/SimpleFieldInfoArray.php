<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleFieldInfoArray implements RequestInterface
{

    /**
     * @var SimpleFieldInfo
     */
    private $SimpleFieldInfo;

    /**
     * Constructor
     *
     * @var SimpleFieldInfo $SimpleFieldInfo
     */
    public function __construct($SimpleFieldInfo)
    {
        $this->SimpleFieldInfo = $SimpleFieldInfo;
    }

    /**
     * @return SimpleFieldInfo
     */
    public function getSimpleFieldInfo()
    {
        return $this->SimpleFieldInfo;
    }

    /**
     * @param SimpleFieldInfo $SimpleFieldInfo
     * @return SimpleFieldInfoArray
     */
    public function withSimpleFieldInfo($SimpleFieldInfo)
    {
        $new = clone $this;
        $new->SimpleFieldInfo = $SimpleFieldInfo;

        return $new;
    }


}

