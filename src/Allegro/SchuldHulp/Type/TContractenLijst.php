<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TContractenLijst implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
     */
    private $Contracten;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten
     */
    public function __construct($Contracten)
    {
        $this->Contracten = $Contracten;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
     */
    public function getContracten()
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten
     * @return TContractenLijst
     */
    public function withContracten($Contracten)
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }


}

