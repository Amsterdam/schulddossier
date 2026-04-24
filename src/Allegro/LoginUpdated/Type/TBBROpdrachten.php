<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBROpdrachten
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray $BBROpdrachten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray $BBROpdrachten
     * @return static
     */
    public function withBBROpdrachten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\BBROpdrachtArray $BBROpdrachten): static
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

