<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class RCHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRCHeader
     */
    private $TRCHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRCHeader
     */
    public function getTRCHeader()
    {
        return $this->TRCHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRCHeader $TRCHeader
     * @return RCHeaderArray
     */
    public function withTRCHeader($TRCHeader)
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}

