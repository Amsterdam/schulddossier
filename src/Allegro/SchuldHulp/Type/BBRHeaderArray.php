<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class BBRHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRHeader
     */
    private $TBBRHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRHeader
     */
    public function getTBBRHeader()
    {
        return $this->TBBRHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRHeader $TBBRHeader
     * @return BBRHeaderArray
     */
    public function withTBBRHeader($TBBRHeader)
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }
}

