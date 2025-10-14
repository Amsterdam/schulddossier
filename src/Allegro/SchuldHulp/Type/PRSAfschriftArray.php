<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class PRSAfschriftArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift
     */
    private $TPRSAfschrift;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift
     */
    public function getTPRSAfschrift()
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift $TPRSAfschrift
     * @return PRSAfschriftArray
     */
    public function withTPRSAfschrift($TPRSAfschrift)
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

