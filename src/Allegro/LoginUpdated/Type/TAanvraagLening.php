<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TAanvraagLening
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray $Schulden;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray
     */
    public function getSchulden(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray $Schulden
     * @return static
     */
    public function withSchulden(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray $Schulden): static
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

