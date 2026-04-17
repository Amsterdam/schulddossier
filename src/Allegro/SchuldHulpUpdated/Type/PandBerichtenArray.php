<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PandBerichtenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPandBericht
     */
    private $TPandBericht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPandBericht
     */
    public function getTPandBericht()
    {
        return $this->TPandBericht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPandBericht $TPandBericht
     * @return PandBerichtenArray
     */
    public function withTPandBericht($TPandBericht)
    {
        $new = clone $this;
        $new->TPandBericht = $TPandBericht;

        return $new;
    }
}

