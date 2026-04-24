<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class OrganisatieArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOrganisatie>
     */
    private array $TOrganisatie;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOrganisatie>
     */
    public function getTOrganisatie(): array
    {
        return $this->TOrganisatie;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOrganisatie> $TOrganisatie
     * @return static
     */
    public function withTOrganisatie(array $TOrganisatie): static
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }
}

