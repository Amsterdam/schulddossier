<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPRSAfschriftReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray $AfschriftReserveringen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return static
     */
    public function withAfschriftReserveringen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray $AfschriftReserveringen): static
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }
}

