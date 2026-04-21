<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class OpdrachtgeverKlantArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOpdrachtgeverKlant
     */
    private $TOpdrachtgeverKlant;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOpdrachtgeverKlant
     */
    public function getTOpdrachtgeverKlant()
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOpdrachtgeverKlant $TOpdrachtgeverKlant
     * @return OpdrachtgeverKlantArray
     */
    public function withTOpdrachtgeverKlant($TOpdrachtgeverKlant)
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

