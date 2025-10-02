<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class ROClientIDHeader
{
    /**
     * @var null | string
     */
    private ?string $ID = null;

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

