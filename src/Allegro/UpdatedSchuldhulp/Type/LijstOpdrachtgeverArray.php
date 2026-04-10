<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class LijstOpdrachtgeverArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TLijstOpdrachtgever
     */
    private $TLijstOpdrachtgever;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TLijstOpdrachtgever
     */
    public function getTLijstOpdrachtgever()
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TLijstOpdrachtgever $TLijstOpdrachtgever
     * @return LijstOpdrachtgeverArray
     */
    public function withTLijstOpdrachtgever($TLijstOpdrachtgever)
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }
}

