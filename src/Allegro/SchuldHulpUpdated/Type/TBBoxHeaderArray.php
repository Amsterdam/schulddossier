<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TBBoxHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxHeader
     */
    private $TBBoxHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxHeader
     */
    public function getTBBoxHeader()
    {
        return $this->TBBoxHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxHeader $TBBoxHeader
     * @return TBBoxHeaderArray
     */
    public function withTBBoxHeader($TBBoxHeader)
    {
        $new = clone $this;
        $new->TBBoxHeader = $TBBoxHeader;

        return $new;
    }
}

