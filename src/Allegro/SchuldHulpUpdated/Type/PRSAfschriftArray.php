<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PRSAfschriftArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschrift
     */
    private $TPRSAfschrift;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschrift
     */
    public function getTPRSAfschrift()
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSAfschrift $TPRSAfschrift
     * @return PRSAfschriftArray
     */
    public function withTPRSAfschrift($TPRSAfschrift)
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

