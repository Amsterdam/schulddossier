<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TContractenLijst implements RequestInterface
{

    /**
     * @var ContractArray
     */
    private $Contracten;

    /**
     * Constructor
     *
     * @var ContractArray $Contracten
     */
    public function __construct($Contracten)
    {
        $this->Contracten = $Contracten;
    }

    /**
     * @return ContractArray
     */
    public function getContracten()
    {
        return $this->Contracten;
    }

    /**
     * @param ContractArray $Contracten
     * @return TContractenLijst
     */
    public function withContracten($Contracten)
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }


}

