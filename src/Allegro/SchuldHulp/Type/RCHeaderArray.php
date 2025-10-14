<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class RCHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader
     */
    private $TRCHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader
     */
    public function getTRCHeader()
    {
        return $this->TRCHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader $TRCHeader
     * @return RCHeaderArray
     */
    public function withTRCHeader($TRCHeader)
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}

