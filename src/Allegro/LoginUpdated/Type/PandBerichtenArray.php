<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PandBerichtenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPandBericht
     */
    private $TPandBericht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPandBericht
     */
    public function getTPandBericht()
    {
        return $this->TPandBericht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPandBericht $TPandBericht
     * @return PandBerichtenArray
     */
    public function withTPandBericht($TPandBericht)
    {
        $new = clone $this;
        $new->TPandBericht = $TPandBericht;

        return $new;
    }
}
