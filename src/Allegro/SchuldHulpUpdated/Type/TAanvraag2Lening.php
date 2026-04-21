<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TAanvraag2Lening
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldArray
     */
    private $Schulden;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldArray
     */
    public function getSchulden()
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldArray $Schulden
     * @return TAanvraag2Lening
     */
    public function withSchulden($Schulden)
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}
