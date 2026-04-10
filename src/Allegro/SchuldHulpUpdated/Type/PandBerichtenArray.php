<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PandBerichtenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPandBericht
     */
    private $TPandBericht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPandBericht
     */
    public function getTPandBericht()
    {
        return $this->TPandBericht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPandBericht $TPandBericht
     * @return PandBerichtenArray
     */
    public function withTPandBericht($TPandBericht)
    {
        $new = clone $this;
        $new->TPandBericht = $TPandBericht;

        return $new;
    }
}

