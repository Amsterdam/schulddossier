<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class CasusDeelopdrachtArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusDeelopdracht>
     */
    private array $TCasusDeelopdracht;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusDeelopdracht>
     */
    public function getTCasusDeelopdracht(): array
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusDeelopdracht> $TCasusDeelopdracht
     * @return static
     */
    public function withTCasusDeelopdracht(array $TCasusDeelopdracht): static
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }
}

