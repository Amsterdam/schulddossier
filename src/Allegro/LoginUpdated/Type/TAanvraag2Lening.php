<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TAanvraag2Lening
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray
     */
    private $Schulden;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray
     */
    public function getSchulden()
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SchuldArray $Schulden
     * @return TAanvraag2Lening
     */
    public function withSchulden($Schulden)
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}
