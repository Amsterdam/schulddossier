<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BBRBegunstigdeArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde
     */
    private $TBBRBegunstigde;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde $TBBRBegunstigde
     */
    public function __construct($TBBRBegunstigde)
    {
        $this->TBBRBegunstigde = $TBBRBegunstigde;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde
     */
    public function getTBBRBegunstigde()
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde $TBBRBegunstigde
     * @return BBRBegunstigdeArray
     */
    public function withTBBRBegunstigde($TBBRBegunstigde)
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }


}

