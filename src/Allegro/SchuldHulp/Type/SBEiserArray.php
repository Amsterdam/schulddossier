<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class SBEiserArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser
     */
    private $TSBEiser;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser
     */
    public function getTSBEiser()
    {
        return $this->TSBEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser $TSBEiser
     * @return SBEiserArray
     */
    public function withTSBEiser($TSBEiser)
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }
}

