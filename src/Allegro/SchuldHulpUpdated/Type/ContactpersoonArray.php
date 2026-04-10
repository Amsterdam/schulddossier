<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class ContactpersoonArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContactpersoon
     */
    private $TContactpersoon;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContactpersoon
     */
    public function getTContactpersoon()
    {
        return $this->TContactpersoon;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContactpersoon $TContactpersoon
     * @return ContactpersoonArray
     */
    public function withTContactpersoon($TContactpersoon)
    {
        $new = clone $this;
        $new->TContactpersoon = $TContactpersoon;

        return $new;
    }
}

