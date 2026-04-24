<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PRSMutatieExtraArray
{
    /**
     * Struct met extra velden voor KlantportaalService
     *
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSMutatieExtra>
     */
    private array $TPRSMutatieExtra;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSMutatieExtra>
     */
    public function getTPRSMutatieExtra(): array
    {
        return $this->TPRSMutatieExtra;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPRSMutatieExtra> $TPRSMutatieExtra
     * @return static
     */
    public function withTPRSMutatieExtra(array $TPRSMutatieExtra): static
    {
        $new = clone $this;
        $new->TPRSMutatieExtra = $TPRSMutatieExtra;

        return $new;
    }
}

