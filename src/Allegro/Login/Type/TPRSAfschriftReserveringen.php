<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSAfschriftReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray $AfschriftReserveringen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return static
     */
    public function withAfschriftReserveringen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray $AfschriftReserveringen) : static
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }
}

