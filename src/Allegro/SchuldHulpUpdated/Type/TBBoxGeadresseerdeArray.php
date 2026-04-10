<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TBBoxGeadresseerdeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxGeadresseerde
     */
    private $TBBoxGeadresseerde;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxGeadresseerde
     */
    public function getTBBoxGeadresseerde()
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxGeadresseerde $TBBoxGeadresseerde
     * @return TBBoxGeadresseerdeArray
     */
    public function withTBBoxGeadresseerde($TBBoxGeadresseerde)
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }
}

