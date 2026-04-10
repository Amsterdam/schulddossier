<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SchuldArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSchuld
     */
    private $TSchuld;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSchuld
     */
    public function getTSchuld()
    {
        return $this->TSchuld;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSchuld $TSchuld
     * @return SchuldArray
     */
    public function withTSchuld($TSchuld)
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}

