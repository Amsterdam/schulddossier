<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class LijstOpdrachtgeverArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TLijstOpdrachtgever
     */
    private $TLijstOpdrachtgever;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TLijstOpdrachtgever
     */
    public function getTLijstOpdrachtgever()
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TLijstOpdrachtgever $TLijstOpdrachtgever
     * @return LijstOpdrachtgeverArray
     */
    public function withTLijstOpdrachtgever($TLijstOpdrachtgever)
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }
}

