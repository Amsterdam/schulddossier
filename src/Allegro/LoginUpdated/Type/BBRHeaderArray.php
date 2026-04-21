<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class BBRHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRHeader
     */
    private $TBBRHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRHeader
     */
    public function getTBBRHeader()
    {
        return $this->TBBRHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBRHeader $TBBRHeader
     * @return BBRHeaderArray
     */
    public function withTBBRHeader($TBBRHeader)
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }
}

