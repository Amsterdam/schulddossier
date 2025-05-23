<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldArray implements RequestInterface
{

    /**
     * @var TSchuld
     */
    private $TSchuld;

    /**
     * Constructor
     *
     * @var TSchuld $TSchuld
     */
    public function __construct($TSchuld)
    {
        $this->TSchuld = $TSchuld;
    }

    /**
     * @return TSchuld
     */
    public function getTSchuld()
    {
        return $this->TSchuld;
    }

    /**
     * @param TSchuld $TSchuld
     * @return SchuldArray
     */
    public function withTSchuld($TSchuld)
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }


}

