<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LijstOpdrachtgeverArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever
     */
    private $TLijstOpdrachtgever;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever $TLijstOpdrachtgever
     */
    public function __construct($TLijstOpdrachtgever)
    {
        $this->TLijstOpdrachtgever = $TLijstOpdrachtgever;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever
     */
    public function getTLijstOpdrachtgever()
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever $TLijstOpdrachtgever
     * @return LijstOpdrachtgeverArray
     */
    public function withTLijstOpdrachtgever($TLijstOpdrachtgever)
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }


}

