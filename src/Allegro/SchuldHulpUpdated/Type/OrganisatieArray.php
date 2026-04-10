<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class OrganisatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOrganisatie
     */
    private $TOrganisatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOrganisatie
     */
    public function getTOrganisatie()
    {
        return $this->TOrganisatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOrganisatie $TOrganisatie
     * @return OrganisatieArray
     */
    public function withTOrganisatie($TOrganisatie)
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }
}

