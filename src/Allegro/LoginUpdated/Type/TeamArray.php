<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TeamArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTeam>
     */
    private array $TTeam;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTeam>
     */
    public function getTTeam(): array
    {
        return $this->TTeam;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTeam> $TTeam
     * @return static
     */
    public function withTTeam(array $TTeam): static
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}

