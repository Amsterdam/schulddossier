<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class BBROpdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBROpdracht
     */
    private $TBBROpdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBROpdracht
     */
    public function getTBBROpdracht()
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBROpdracht $TBBROpdracht
     * @return BBROpdrachtArray
     */
    public function withTBBROpdracht($TBBROpdracht)
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }
}
