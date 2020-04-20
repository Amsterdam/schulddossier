<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift
     */
    private $TPRSAfschrift;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift $TPRSAfschrift
     */
    public function __construct($TPRSAfschrift)
    {
        $this->TPRSAfschrift = $TPRSAfschrift;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift
     */
    public function getTPRSAfschrift()
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift $TPRSAfschrift
     * @return PRSAfschriftArray
     */
    public function withTPRSAfschrift($TPRSAfschrift)
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }


}

