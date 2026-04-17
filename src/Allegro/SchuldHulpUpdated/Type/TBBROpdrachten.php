<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TBBROpdrachten
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\BBROpdrachtArray
     */
    private $BBROpdrachten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\BBROpdrachtArray $BBROpdrachten
     * @return TBBROpdrachten
     */
    public function withBBROpdrachten($BBROpdrachten)
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

