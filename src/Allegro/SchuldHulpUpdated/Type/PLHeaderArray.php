<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PLHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPLHeader
     */
    private $TPLHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPLHeader
     */
    public function getTPLHeader()
    {
        return $this->TPLHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPLHeader $TPLHeader
     * @return PLHeaderArray
     */
    public function withTPLHeader($TPLHeader)
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }
}

