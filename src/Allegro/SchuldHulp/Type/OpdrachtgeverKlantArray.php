<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class OpdrachtgeverKlantArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant
     */
    private $TOpdrachtgeverKlant;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant
     */
    public function getTOpdrachtgeverKlant()
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant $TOpdrachtgeverKlant
     * @return OpdrachtgeverKlantArray
     */
    public function withTOpdrachtgeverKlant($TOpdrachtgeverKlant)
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

