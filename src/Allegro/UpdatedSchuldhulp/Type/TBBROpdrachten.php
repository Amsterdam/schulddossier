<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TBBROpdrachten
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\BBROpdrachtArray
     */
    private $BBROpdrachten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\BBROpdrachtArray $BBROpdrachten
     * @return TBBROpdrachten
     */
    public function withBBROpdrachten($BBROpdrachten)
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

