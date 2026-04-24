<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TrajectTaakArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTrajectTaak>
     */
    private array $TTrajectTaak;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTrajectTaak>
     */
    public function getTTrajectTaak(): array
    {
        return $this->TTrajectTaak;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTrajectTaak> $TTrajectTaak
     * @return static
     */
    public function withTTrajectTaak(array $TTrajectTaak): static
    {
        $new = clone $this;
        $new->TTrajectTaak = $TTrajectTaak;

        return $new;
    }
}

