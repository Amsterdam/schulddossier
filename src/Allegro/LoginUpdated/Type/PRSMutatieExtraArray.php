<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PRSMutatieExtraArray
{
    /**
     * Struct met extra velden voor KlantportaalService
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatieExtra>
     */
    private array $TPRSMutatieExtra;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatieExtra>
     */
    public function getTPRSMutatieExtra(): array
    {
        return $this->TPRSMutatieExtra;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatieExtra> $TPRSMutatieExtra
     * @return static
     */
    public function withTPRSMutatieExtra(array $TPRSMutatieExtra): static
    {
        $new = clone $this;
        $new->TPRSMutatieExtra = $TPRSMutatieExtra;

        return $new;
    }
}

