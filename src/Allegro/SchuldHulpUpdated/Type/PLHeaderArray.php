<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PLHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPLHeader
     */
    private $TPLHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPLHeader
     */
    public function getTPLHeader()
    {
        return $this->TPLHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPLHeader $TPLHeader
     * @return PLHeaderArray
     */
    public function withTPLHeader($TPLHeader)
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }
}

