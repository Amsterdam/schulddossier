<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class ContactpersoonArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon>
     */
    private array $TContactpersoon;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon>
     */
    public function getTContactpersoon() : array
    {
        return $this->TContactpersoon;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon> $TContactpersoon
     * @return static
     */
    public function withTContactpersoon(array $TContactpersoon) : static
    {
        $new = clone $this;
        $new->TContactpersoon = $TContactpersoon;

        return $new;
    }
}

