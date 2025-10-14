<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class CasusHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader
     */
    private $TCasusHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader
     */
    public function getTCasusHeader()
    {
        return $this->TCasusHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $TCasusHeader
     * @return CasusHeaderArray
     */
    public function withTCasusHeader($TCasusHeader)
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }
}

