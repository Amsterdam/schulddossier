<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TeamArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam
     */
    private $TTeam;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam
     */
    public function getTTeam()
    {
        return $this->TTeam;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam $TTeam
     * @return TeamArray
     */
    public function withTTeam($TTeam)
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}

