<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TContractenLijst implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten)
    {
        $this->Contracten = $Contracten;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
     */
    public function getContracten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray
    {
        return $this->Contracten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten
     * @return static
     */
    public function withContracten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray $Contracten) : static
    {
        $new = clone $this;
        $new->Contracten = $Contracten;

        return $new;
    }
}

