<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TPRSAfschriftReserveringen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftReseveringArray
     */
    private $AfschriftReserveringen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen()
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return TPRSAfschriftReserveringen
     */
    public function withAfschriftReserveringen($AfschriftReserveringen)
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }
}

