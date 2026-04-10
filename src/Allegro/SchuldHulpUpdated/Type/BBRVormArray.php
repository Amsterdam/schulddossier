<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class BBRVormArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRVorm
     */
    private $TBBRVorm;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRVorm
     */
    public function getTBBRVorm()
    {
        return $this->TBBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBRVorm $TBBRVorm
     * @return BBRVormArray
     */
    public function withTBBRVorm($TBBRVorm)
    {
        $new = clone $this;
        $new->TBBRVorm = $TBBRVorm;

        return $new;
    }
}

