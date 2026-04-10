<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SRVEiserArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVEiser
     */
    private $TSRVEiser;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVEiser
     */
    public function getTSRVEiser()
    {
        return $this->TSRVEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVEiser $TSRVEiser
     * @return SRVEiserArray
     */
    public function withTSRVEiser($TSRVEiser)
    {
        $new = clone $this;
        $new->TSRVEiser = $TSRVEiser;

        return $new;
    }
}

