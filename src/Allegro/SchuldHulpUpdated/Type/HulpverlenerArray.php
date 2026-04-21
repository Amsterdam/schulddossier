<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class HulpverlenerArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\THulpverlener
     */
    private $THulpverlener;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\THulpverlener
     */
    public function getTHulpverlener()
    {
        return $this->THulpverlener;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\THulpverlener $THulpverlener
     * @return HulpverlenerArray
     */
    public function withTHulpverlener($THulpverlener)
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}
