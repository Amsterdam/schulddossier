<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class HulpverlenerArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\THulpverlener
     */
    private $THulpverlener;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\THulpverlener
     */
    public function getTHulpverlener()
    {
        return $this->THulpverlener;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\THulpverlener $THulpverlener
     * @return HulpverlenerArray
     */
    public function withTHulpverlener($THulpverlener)
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}

