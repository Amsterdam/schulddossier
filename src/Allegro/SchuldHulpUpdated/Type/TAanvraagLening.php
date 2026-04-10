<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TAanvraagLening
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldArray
     */
    private $Schulden;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldArray
     */
    public function getSchulden()
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldArray $Schulden
     * @return TAanvraagLening
     */
    public function withSchulden($Schulden)
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

