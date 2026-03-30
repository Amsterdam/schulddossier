<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class ContactpersoonArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TContactpersoon
     */
    private $TContactpersoon;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TContactpersoon
     */
    public function getTContactpersoon()
    {
        return $this->TContactpersoon;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TContactpersoon $TContactpersoon
     * @return ContactpersoonArray
     */
    public function withTContactpersoon($TContactpersoon)
    {
        $new = clone $this;
        $new->TContactpersoon = $TContactpersoon;

        return $new;
    }
}

