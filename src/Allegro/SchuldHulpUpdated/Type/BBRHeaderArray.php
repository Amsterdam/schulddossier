<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class BBRHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRHeader
     */
    private $TBBRHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRHeader
     */
    public function getTBBRHeader()
    {
        return $this->TBBRHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRHeader $TBBRHeader
     * @return BBRHeaderArray
     */
    public function withTBBRHeader($TBBRHeader)
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }
}

