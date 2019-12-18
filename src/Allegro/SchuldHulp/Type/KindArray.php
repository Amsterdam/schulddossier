<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KindArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind
     */
    private $TKind;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind $TKind
     */
    public function __construct($TKind)
    {
        $this->TKind = $TKind;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind
     */
    public function getTKind()
    {
        return $this->TKind;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind $TKind
     * @return KindArray
     */
    public function withTKind($TKind)
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }


}

