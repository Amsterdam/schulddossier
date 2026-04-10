<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class OrganisatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TOrganisatie
     */
    private $TOrganisatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TOrganisatie
     */
    public function getTOrganisatie()
    {
        return $this->TOrganisatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TOrganisatie $TOrganisatie
     * @return OrganisatieArray
     */
    public function withTOrganisatie($TOrganisatie)
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }
}

