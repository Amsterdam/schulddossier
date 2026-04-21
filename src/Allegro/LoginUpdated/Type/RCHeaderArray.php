<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class RCHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRCHeader
     */
    private $TRCHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRCHeader
     */
    public function getTRCHeader()
    {
        return $this->TRCHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRCHeader $TRCHeader
     * @return RCHeaderArray
     */
    public function withTRCHeader($TRCHeader)
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}
