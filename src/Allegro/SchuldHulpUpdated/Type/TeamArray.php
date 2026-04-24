<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TeamArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTeam>
     */
    private array $TTeam;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTeam>
     */
    public function getTTeam(): array
    {
        return $this->TTeam;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTeam> $TTeam
     * @return static
     */
    public function withTTeam(array $TTeam): static
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}

