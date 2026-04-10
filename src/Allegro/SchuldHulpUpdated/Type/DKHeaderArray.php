<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class DKHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TDKHeader
     */
    private $TDKHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TDKHeader
     */
    public function getTDKHeader()
    {
        return $this->TDKHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TDKHeader $TDKHeader
     * @return DKHeaderArray
     */
    public function withTDKHeader($TDKHeader)
    {
        $new = clone $this;
        $new->TDKHeader = $TDKHeader;

        return $new;
    }
}

