<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TPRSAfschriftReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSAfschriftReseveringArray
     */
    private $AfschriftReserveringen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen()
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return TPRSAfschriftReserveringen
     */
    public function withAfschriftReserveringen($AfschriftReserveringen)
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }
}

