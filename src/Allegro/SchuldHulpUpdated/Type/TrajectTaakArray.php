<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TrajectTaakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTrajectTaak
     */
    private $TTrajectTaak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTrajectTaak
     */
    public function getTTrajectTaak()
    {
        return $this->TTrajectTaak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTrajectTaak $TTrajectTaak
     * @return TrajectTaakArray
     */
    public function withTTrajectTaak($TTrajectTaak)
    {
        $new = clone $this;
        $new->TTrajectTaak = $TTrajectTaak;

        return $new;
    }
}

