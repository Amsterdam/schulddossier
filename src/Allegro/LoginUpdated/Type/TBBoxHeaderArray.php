<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBoxHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxHeader
     */
    private $TBBoxHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxHeader
     */
    public function getTBBoxHeader()
    {
        return $this->TBBoxHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxHeader $TBBoxHeader
     * @return TBBoxHeaderArray
     */
    public function withTBBoxHeader($TBBoxHeader)
    {
        $new = clone $this;
        $new->TBBoxHeader = $TBBoxHeader;

        return $new;
    }
}

