<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TContract2Array implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2
     */
    private $TContract2;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2 $TContract2
     */
    public function __construct($TContract2)
    {
        $this->TContract2 = $TContract2;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2
     */
    public function getTContract2()
    {
        return $this->TContract2;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2 $TContract2
     * @return TContract2Array
     */
    public function withTContract2($TContract2)
    {
        $new = clone $this;
        $new->TContract2 = $TContract2;

        return $new;
    }
}
