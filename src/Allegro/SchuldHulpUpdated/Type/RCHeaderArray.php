<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class RCHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRCHeader
     */
    private $TRCHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRCHeader
     */
    public function getTRCHeader()
    {
        return $this->TRCHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRCHeader $TRCHeader
     * @return RCHeaderArray
     */
    public function withTRCHeader($TRCHeader)
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}

