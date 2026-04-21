<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class DKHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TDKHeader
     */
    private $TDKHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TDKHeader
     */
    public function getTDKHeader()
    {
        return $this->TDKHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TDKHeader $TDKHeader
     * @return DKHeaderArray
     */
    public function withTDKHeader($TDKHeader)
    {
        $new = clone $this;
        $new->TDKHeader = $TDKHeader;

        return $new;
    }
}

