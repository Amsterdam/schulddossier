<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TeamArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTeam
     */
    private $TTeam;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTeam
     */
    public function getTTeam()
    {
        return $this->TTeam;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTeam $TTeam
     * @return TeamArray
     */
    public function withTTeam($TTeam)
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}

