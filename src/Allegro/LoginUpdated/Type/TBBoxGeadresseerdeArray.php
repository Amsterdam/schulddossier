<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBoxGeadresseerdeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxGeadresseerde
     */
    private $TBBoxGeadresseerde;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxGeadresseerde
     */
    public function getTBBoxGeadresseerde()
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxGeadresseerde $TBBoxGeadresseerde
     * @return TBBoxGeadresseerdeArray
     */
    public function withTBBoxGeadresseerde($TBBoxGeadresseerde)
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }
}

