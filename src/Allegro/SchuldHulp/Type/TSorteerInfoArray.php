<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSorteerInfoArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo
     */
    private $TSorteerInfo;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo $TSorteerInfo
     */
    public function __construct($TSorteerInfo)
    {
        $this->TSorteerInfo = $TSorteerInfo;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo
     */
    public function getTSorteerInfo()
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo $TSorteerInfo
     * @return TSorteerInfoArray
     */
    public function withTSorteerInfo($TSorteerInfo)
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }


}

