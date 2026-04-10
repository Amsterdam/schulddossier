<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TBBoxBijlageArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxBijlage
     */
    private $TBBoxBijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxBijlage
     */
    public function getTBBoxBijlage()
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxBijlage $TBBoxBijlage
     * @return TBBoxBijlageArray
     */
    public function withTBBoxBijlage($TBBoxBijlage)
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }
}

