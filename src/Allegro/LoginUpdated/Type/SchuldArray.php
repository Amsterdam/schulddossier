<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SchuldArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSchuld
     */
    private $TSchuld;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSchuld
     */
    public function getTSchuld()
    {
        return $this->TSchuld;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSchuld $TSchuld
     * @return SchuldArray
     */
    public function withTSchuld($TSchuld)
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}

