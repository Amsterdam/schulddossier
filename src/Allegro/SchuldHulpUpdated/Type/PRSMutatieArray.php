<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PRSMutatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSMutatie
     */
    private $TPRSMutatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSMutatie
     */
    public function getTPRSMutatie()
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSMutatie $TPRSMutatie
     * @return PRSMutatieArray
     */
    public function withTPRSMutatie($TPRSMutatie)
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }
}

