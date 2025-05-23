<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftArray implements RequestInterface
{

    /**
     * @var TPRSAfschrift
     */
    private $TPRSAfschrift;

    /**
     * Constructor
     *
     * @var TPRSAfschrift $TPRSAfschrift
     */
    public function __construct($TPRSAfschrift)
    {
        $this->TPRSAfschrift = $TPRSAfschrift;
    }

    /**
     * @return TPRSAfschrift
     */
    public function getTPRSAfschrift()
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param TPRSAfschrift $TPRSAfschrift
     * @return PRSAfschriftArray
     */
    public function withTPRSAfschrift($TPRSAfschrift)
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }


}

