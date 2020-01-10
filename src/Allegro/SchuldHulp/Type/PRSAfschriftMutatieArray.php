<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftMutatieArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie
     */
    private $TPRSAfschriftMutatie;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie $TPRSAfschriftMutatie
     */
    public function __construct($TPRSAfschriftMutatie)
    {
        $this->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie
     */
    public function getTPRSAfschriftMutatie()
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie $TPRSAfschriftMutatie
     * @return PRSAfschriftMutatieArray
     */
    public function withTPRSAfschriftMutatie($TPRSAfschriftMutatie)
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }


}

