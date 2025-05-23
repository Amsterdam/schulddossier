<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleRequestInfoArray implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * Constructor
     *
     * @var SimpleRequestInfo $SimpleRequestInfo
     */
    public function __construct($SimpleRequestInfo)
    {
        $this->SimpleRequestInfo = $SimpleRequestInfo;
    }

    /**
     * @return SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }


}

