<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TBBoxBijlageArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxBijlage
     */
    private $TBBoxBijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxBijlage
     */
    public function getTBBoxBijlage()
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxBijlage $TBBoxBijlage
     * @return TBBoxBijlageArray
     */
    public function withTBBoxBijlage($TBBoxBijlage)
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }
}

