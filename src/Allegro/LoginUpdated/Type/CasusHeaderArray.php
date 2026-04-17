<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class CasusHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusHeader
     */
    private $TCasusHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusHeader
     */
    public function getTCasusHeader()
    {
        return $this->TCasusHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusHeader $TCasusHeader
     * @return CasusHeaderArray
     */
    public function withTCasusHeader($TCasusHeader)
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }
}

