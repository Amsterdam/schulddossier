<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ROClientIDHeader implements RequestInterface
{
    /**
     * @var string
     */
    private $ID;

    /**
     * Constructor
     *
     * @var string $ID
     */
    public function __construct($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     * @return ROClientIDHeader
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }
}
