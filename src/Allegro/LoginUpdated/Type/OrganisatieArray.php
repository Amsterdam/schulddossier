<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class OrganisatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOrganisatie
     */
    private $TOrganisatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOrganisatie
     */
    public function getTOrganisatie()
    {
        return $this->TOrganisatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOrganisatie $TOrganisatie
     * @return OrganisatieArray
     */
    public function withTOrganisatie($TOrganisatie)
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }
}

