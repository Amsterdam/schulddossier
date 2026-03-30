<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class BBROpdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBROpdracht
     */
    private $TBBROpdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBROpdracht
     */
    public function getTBBROpdracht()
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBROpdracht $TBBROpdracht
     * @return BBROpdrachtArray
     */
    public function withTBBROpdracht($TBBROpdracht)
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }
}

