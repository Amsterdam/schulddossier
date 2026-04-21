<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SBHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSBHeader
     */
    private $TSBHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSBHeader
     */
    public function getTSBHeader()
    {
        return $this->TSBHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSBHeader $TSBHeader
     * @return SBHeaderArray
     */
    public function withTSBHeader($TSBHeader)
    {
        $new = clone $this;
        $new->TSBHeader = $TSBHeader;

        return $new;
    }
}

