<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TBBROpdrachten
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\BBROpdrachtArray
     */
    private $BBROpdrachten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\BBROpdrachtArray $BBROpdrachten
     * @return TBBROpdrachten
     */
    public function withBBROpdrachten($BBROpdrachten)
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

