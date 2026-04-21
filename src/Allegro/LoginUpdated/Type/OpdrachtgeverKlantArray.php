<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class OpdrachtgeverKlantArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOpdrachtgeverKlant
     */
    private $TOpdrachtgeverKlant;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOpdrachtgeverKlant
     */
    public function getTOpdrachtgeverKlant()
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOpdrachtgeverKlant $TOpdrachtgeverKlant
     * @return OpdrachtgeverKlantArray
     */
    public function withTOpdrachtgeverKlant($TOpdrachtgeverKlant)
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

