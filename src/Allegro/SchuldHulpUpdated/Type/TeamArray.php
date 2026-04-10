<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TeamArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTeam
     */
    private $TTeam;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTeam
     */
    public function getTTeam()
    {
        return $this->TTeam;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTeam $TTeam
     * @return TeamArray
     */
    public function withTTeam($TTeam)
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}

