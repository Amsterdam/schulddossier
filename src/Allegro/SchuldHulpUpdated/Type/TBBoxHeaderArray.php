<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TBBoxHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxHeader
     */
    private $TBBoxHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxHeader
     */
    public function getTBBoxHeader()
    {
        return $this->TBBoxHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxHeader $TBBoxHeader
     * @return TBBoxHeaderArray
     */
    public function withTBBoxHeader($TBBoxHeader)
    {
        $new = clone $this;
        $new->TBBoxHeader = $TBBoxHeader;

        return $new;
    }
}

