<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TBBoxBijlageArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxBijlage
     */
    private $TBBoxBijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxBijlage
     */
    public function getTBBoxBijlage()
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxBijlage $TBBoxBijlage
     * @return TBBoxBijlageArray
     */
    public function withTBBoxBijlage($TBBoxBijlage)
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }
}

