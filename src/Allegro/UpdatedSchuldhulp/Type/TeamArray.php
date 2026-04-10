<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TeamArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTeam
     */
    private $TTeam;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTeam
     */
    public function getTTeam()
    {
        return $this->TTeam;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTeam $TTeam
     * @return TeamArray
     */
    public function withTTeam($TTeam)
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}

