<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PLHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPLHeader
     */
    private $TPLHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPLHeader
     */
    public function getTPLHeader()
    {
        return $this->TPLHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPLHeader $TPLHeader
     * @return PLHeaderArray
     */
    public function withTPLHeader($TPLHeader)
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }
}

