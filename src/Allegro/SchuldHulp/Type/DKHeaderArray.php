<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class DKHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader
     */
    private $TDKHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader
     */
    public function getTDKHeader()
    {
        return $this->TDKHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader $TDKHeader
     * @return DKHeaderArray
     */
    public function withTDKHeader($TDKHeader)
    {
        $new = clone $this;
        $new->TDKHeader = $TDKHeader;

        return $new;
    }
}

