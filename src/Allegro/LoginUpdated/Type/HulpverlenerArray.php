<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class HulpverlenerArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\THulpverlener
     */
    private $THulpverlener;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\THulpverlener
     */
    public function getTHulpverlener()
    {
        return $this->THulpverlener;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\THulpverlener $THulpverlener
     * @return HulpverlenerArray
     */
    public function withTHulpverlener($THulpverlener)
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}

