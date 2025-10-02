<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAanvraagLening extends TAanvraag
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
     */
    public function getSchulden() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden
     * @return static
     */
    public function withSchulden(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden) : static
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

