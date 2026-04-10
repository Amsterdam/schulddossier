<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class LijstOpdrachtgeverArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TLijstOpdrachtgever
     */
    private $TLijstOpdrachtgever;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TLijstOpdrachtgever
     */
    public function getTLijstOpdrachtgever()
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TLijstOpdrachtgever $TLijstOpdrachtgever
     * @return LijstOpdrachtgeverArray
     */
    public function withTLijstOpdrachtgever($TLijstOpdrachtgever)
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }
}

