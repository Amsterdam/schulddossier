<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class BBRBegunstigdeArray implements RequestInterface
{

    /**
     * @var TBBRBegunstigde
     */
    private $TBBRBegunstigde;

    /**
     * Constructor
     *
     * @var TBBRBegunstigde $TBBRBegunstigde
     */
    public function __construct($TBBRBegunstigde)
    {
        $this->TBBRBegunstigde = $TBBRBegunstigde;
    }

    /**
     * @return TBBRBegunstigde
     */
    public function getTBBRBegunstigde()
    {
        return $this->TBBRBegunstigde;
    }

    /**
     * @param TBBRBegunstigde $TBBRBegunstigde
     * @return BBRBegunstigdeArray
     */
    public function withTBBRBegunstigde($TBBRBegunstigde)
    {
        $new = clone $this;
        $new->TBBRBegunstigde = $TBBRBegunstigde;

        return $new;
    }


}

