<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class CasusHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusHeader
     */
    private $TCasusHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusHeader
     */
    public function getTCasusHeader()
    {
        return $this->TCasusHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusHeader $TCasusHeader
     * @return CasusHeaderArray
     */
    public function withTCasusHeader($TCasusHeader)
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }
}

