<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PandBerichtenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPandBericht
     */
    private $TPandBericht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPandBericht
     */
    public function getTPandBericht()
    {
        return $this->TPandBericht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPandBericht $TPandBericht
     * @return PandBerichtenArray
     */
    public function withTPandBericht($TPandBericht)
    {
        $new = clone $this;
        $new->TPandBericht = $TPandBericht;

        return $new;
    }
}

