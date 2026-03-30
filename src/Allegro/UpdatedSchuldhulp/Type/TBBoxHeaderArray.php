<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TBBoxHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxHeader
     */
    private $TBBoxHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxHeader
     */
    public function getTBBoxHeader()
    {
        return $this->TBBoxHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxHeader $TBBoxHeader
     * @return TBBoxHeaderArray
     */
    public function withTBBoxHeader($TBBoxHeader)
    {
        $new = clone $this;
        $new->TBBoxHeader = $TBBoxHeader;

        return $new;
    }
}

