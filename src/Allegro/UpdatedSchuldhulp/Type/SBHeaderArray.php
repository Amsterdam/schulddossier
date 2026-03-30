<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SBHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSBHeader
     */
    private $TSBHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSBHeader
     */
    public function getTSBHeader()
    {
        return $this->TSBHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSBHeader $TSBHeader
     * @return SBHeaderArray
     */
    public function withTSBHeader($TSBHeader)
    {
        $new = clone $this;
        $new->TSBHeader = $TSBHeader;

        return $new;
    }
}

