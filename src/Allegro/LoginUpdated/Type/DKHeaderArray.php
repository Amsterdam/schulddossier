<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class DKHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TDKHeader
     */
    private $TDKHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TDKHeader
     */
    public function getTDKHeader()
    {
        return $this->TDKHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TDKHeader $TDKHeader
     * @return DKHeaderArray
     */
    public function withTDKHeader($TDKHeader)
    {
        $new = clone $this;
        $new->TDKHeader = $TDKHeader;

        return $new;
    }
}

