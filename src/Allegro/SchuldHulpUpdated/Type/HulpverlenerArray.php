<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class HulpverlenerArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\THulpverlener
     */
    private $THulpverlener;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\THulpverlener
     */
    public function getTHulpverlener()
    {
        return $this->THulpverlener;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\THulpverlener $THulpverlener
     * @return HulpverlenerArray
     */
    public function withTHulpverlener($THulpverlener)
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}

