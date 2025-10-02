<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class OrganisatieArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie>
     */
    private array $TOrganisatie;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie>
     */
    public function getTOrganisatie() : array
    {
        return $this->TOrganisatie;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie> $TOrganisatie
     * @return static
     */
    public function withTOrganisatie(array $TOrganisatie) : static
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }
}

