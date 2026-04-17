<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TrajectTaakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTrajectTaak
     */
    private $TTrajectTaak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTrajectTaak
     */
    public function getTTrajectTaak()
    {
        return $this->TTrajectTaak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTrajectTaak $TTrajectTaak
     * @return TrajectTaakArray
     */
    public function withTTrajectTaak($TTrajectTaak)
    {
        $new = clone $this;
        $new->TTrajectTaak = $TTrajectTaak;

        return $new;
    }
}

