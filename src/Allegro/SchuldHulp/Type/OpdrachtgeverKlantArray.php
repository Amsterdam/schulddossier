<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OpdrachtgeverKlantArray implements RequestInterface
{
    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant
     */
    private $TOpdrachtgeverKlant;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant $TOpdrachtgeverKlant
     */
    public function __construct($TOpdrachtgeverKlant)
    {
        $this->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant
     */
    public function getTOpdrachtgeverKlant()
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant $TOpdrachtgeverKlant
     * @return OpdrachtgeverKlantArray
     */
    public function withTOpdrachtgeverKlant($TOpdrachtgeverKlant)
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}
