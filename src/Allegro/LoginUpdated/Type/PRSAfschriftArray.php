<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PRSAfschriftArray
{
    /**
     * Tbv. PRS Online Afschriften
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSAfschrift>
     */
    private array $TPRSAfschrift;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSAfschrift>
     */
    public function getTPRSAfschrift(): array
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSAfschrift> $TPRSAfschrift
     * @return static
     */
    public function withTPRSAfschrift(array $TPRSAfschrift): static
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

