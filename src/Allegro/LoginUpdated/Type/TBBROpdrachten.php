<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBROpdrachten
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray
     */
    private $BBROpdrachten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray $BBROpdrachten
     * @return TBBROpdrachten
     */
    public function withBBROpdrachten($BBROpdrachten)
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

