<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PRSAfschriftArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschrift
     */
    private $TPRSAfschrift;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschrift
     */
    public function getTPRSAfschrift()
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschrift $TPRSAfschrift
     * @return PRSAfschriftArray
     */
    public function withTPRSAfschrift($TPRSAfschrift)
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

