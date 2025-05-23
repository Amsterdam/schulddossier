<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrganisatieArray implements RequestInterface
{

    /**
     * @var TOrganisatie
     */
    private $TOrganisatie;

    /**
     * Constructor
     *
     * @var TOrganisatie $TOrganisatie
     */
    public function __construct($TOrganisatie)
    {
        $this->TOrganisatie = $TOrganisatie;
    }

    /**
     * @return TOrganisatie
     */
    public function getTOrganisatie()
    {
        return $this->TOrganisatie;
    }

    /**
     * @param TOrganisatie $TOrganisatie
     * @return OrganisatieArray
     */
    public function withTOrganisatie($TOrganisatie)
    {
        $new = clone $this;
        $new->TOrganisatie = $TOrganisatie;

        return $new;
    }


}

