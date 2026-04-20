<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld
     */
    private $TSchuld;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld $TSchuld
     */
    public function __construct($TSchuld)
    {
        $this->TSchuld = $TSchuld;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld
     */
    public function getTSchuld()
    {
        return $this->TSchuld;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld $TSchuld
     * @return SchuldArray
     */
    public function withTSchuld($TSchuld)
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}
