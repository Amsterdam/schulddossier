<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class CasusHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusHeader
     */
    private $TCasusHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusHeader
     */
    public function getTCasusHeader()
    {
        return $this->TCasusHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusHeader $TCasusHeader
     * @return CasusHeaderArray
     */
    public function withTCasusHeader($TCasusHeader)
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }
}

