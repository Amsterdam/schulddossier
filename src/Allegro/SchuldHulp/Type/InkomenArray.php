<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class InkomenArray implements RequestInterface
{

    /**
     * @var TInkomen
     */
    private $TInkomen;

    /**
     * Constructor
     *
     * @var TInkomen $TInkomen
     */
    public function __construct($TInkomen)
    {
        $this->TInkomen = $TInkomen;
    }

    /**
     * @return TInkomen
     */
    public function getTInkomen()
    {
        return $this->TInkomen;
    }

    /**
     * @param TInkomen $TInkomen
     * @return InkomenArray
     */
    public function withTInkomen($TInkomen)
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }


}

