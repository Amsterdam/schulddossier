<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TAanvraag2Lening implements RequestInterface
{

    /**
     * @var SchuldArray
     */
    private $Schulden;

    /**
     * Constructor
     *
     * @var SchuldArray $Schulden
     */
    public function __construct($Schulden)
    {
        $this->Schulden = $Schulden;
    }

    /**
     * @return SchuldArray
     */
    public function getSchulden()
    {
        return $this->Schulden;
    }

    /**
     * @param SchuldArray $Schulden
     * @return TAanvraag2Lening
     */
    public function withSchulden($Schulden)
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }


}

