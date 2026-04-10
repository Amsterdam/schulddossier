<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SBEiserArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBEiser
     */
    private $TSBEiser;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBEiser
     */
    public function getTSBEiser()
    {
        return $this->TSBEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBEiser $TSBEiser
     * @return SBEiserArray
     */
    public function withTSBEiser($TSBEiser)
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }
}

