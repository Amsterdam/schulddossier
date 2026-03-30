<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SchuldArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSchuld
     */
    private $TSchuld;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSchuld
     */
    public function getTSchuld()
    {
        return $this->TSchuld;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSchuld $TSchuld
     * @return SchuldArray
     */
    public function withTSchuld($TSchuld)
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}

