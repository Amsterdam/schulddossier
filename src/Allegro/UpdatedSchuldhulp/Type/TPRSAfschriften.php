<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TPRSAfschriften
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSAfschriftArray
     */
    private $Afschriften;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSAfschriftArray
     */
    public function getAfschriften()
    {
        return $this->Afschriften;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\PRSAfschriftArray $Afschriften
     * @return TPRSAfschriften
     */
    public function withAfschriften($Afschriften)
    {
        $new = clone $this;
        $new->Afschriften = $Afschriften;

        return $new;
    }
}

