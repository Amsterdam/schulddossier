<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrganisatieArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
     */
    private $TOrganisatie;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $TOrganisatie
     */
    public function __construct($TOrganisatie)
    {
        $this->TOrganisatie = $TOrganisatie;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
     */
    public function getTOrganisatie()
    {
        return $this->TOrganisatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $TOrganisatie
     * @return OrganisatieArray
     */
    public function withTOrganisatie($TOrganisatie)
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }
}
