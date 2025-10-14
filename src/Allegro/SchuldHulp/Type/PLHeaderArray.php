<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class PLHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
     */
    private $TPLHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
     */
    public function getTPLHeader()
    {
        return $this->TPLHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $TPLHeader
     * @return PLHeaderArray
     */
    public function withTPLHeader($TPLHeader)
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }
}

