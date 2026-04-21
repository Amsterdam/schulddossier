<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPRSAfschriftReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray
     */
    private $AfschriftReserveringen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen()
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return TPRSAfschriftReserveringen
     */
    public function withAfschriftReserveringen($AfschriftReserveringen)
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }
}
