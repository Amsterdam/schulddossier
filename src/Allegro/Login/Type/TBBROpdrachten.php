<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBROpdrachten
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray $BBROpdrachten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray $BBROpdrachten
     * @return static
     */
    public function withBBROpdrachten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray $BBROpdrachten) : static
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

