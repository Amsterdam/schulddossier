<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class BBRHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRHeader
     */
    private $TBBRHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRHeader
     */
    public function getTBBRHeader()
    {
        return $this->TBBRHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBRHeader $TBBRHeader
     * @return BBRHeaderArray
     */
    public function withTBBRHeader($TBBRHeader)
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }
}

