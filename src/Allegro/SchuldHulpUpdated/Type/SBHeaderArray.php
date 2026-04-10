<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SBHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader
     */
    private $TSBHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader
     */
    public function getTSBHeader()
    {
        return $this->TSBHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader $TSBHeader
     * @return SBHeaderArray
     */
    public function withTSBHeader($TSBHeader)
    {
        $new = clone $this;
        $new->TSBHeader = $TSBHeader;

        return $new;
    }
}

