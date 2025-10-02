<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TrajectSoortArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort>
     */
    private array $TTrajectSoort;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort>
     */
    public function getTTrajectSoort() : array
    {
        return $this->TTrajectSoort;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort> $TTrajectSoort
     * @return static
     */
    public function withTTrajectSoort(array $TTrajectSoort) : static
    {
        $new = clone $this;
        $new->TTrajectSoort = $TTrajectSoort;

        return $new;
    }
}

