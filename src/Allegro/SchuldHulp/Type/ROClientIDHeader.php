<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ROClientIDHeader implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $ID = null;

    /**
     * Constructor
     *
     * @param null | string $ID
     */
    public function __construct(?string $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return null | string
     */
    public function getID() : ?string
    {
        return $this->ID;
    }

    /**
     * @param null | string $ID
     * @return static
     */
    public function withID(?string $ID) : static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }
}

