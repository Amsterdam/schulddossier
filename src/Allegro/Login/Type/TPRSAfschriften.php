<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPRSAfschriften
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray $Afschriften;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray
     */
    public function getAfschriften() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray
    {
        return $this->Afschriften;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray $Afschriften
     * @return static
     */
    public function withAfschriften(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray $Afschriften) : static
    {
        $new = clone $this;
        $new->Afschriften = $Afschriften;

        return $new;
    }
}

