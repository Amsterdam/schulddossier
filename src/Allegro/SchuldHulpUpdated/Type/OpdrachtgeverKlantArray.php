<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class OpdrachtgeverKlantArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOpdrachtgeverKlant
     */
    private $TOpdrachtgeverKlant;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOpdrachtgeverKlant
     */
    public function getTOpdrachtgeverKlant()
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOpdrachtgeverKlant $TOpdrachtgeverKlant
     * @return OpdrachtgeverKlantArray
     */
    public function withTOpdrachtgeverKlant($TOpdrachtgeverKlant)
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

