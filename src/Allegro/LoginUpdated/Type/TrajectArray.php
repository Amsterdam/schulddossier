<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TrajectArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTraject>
     */
    private array $TTraject;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTraject>
     */
    public function getTTraject(): array
    {
        return $this->TTraject;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTraject> $TTraject
     * @return static
     */
    public function withTTraject(array $TTraject): static
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }
}

