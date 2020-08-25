<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class OrganisatieArray
{

    /**
     * @var TOrganisatie[] $TOrganisatie
     */
    protected $TOrganisatie = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TOrganisatie[]
     */
    public function getTOrganisatie()
    {
      return $this->TOrganisatie;
    }

    /**
     * @param TOrganisatie[] $TOrganisatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\OrganisatieArray
     */
    public function setTOrganisatie(array $TOrganisatie = null)
    {
      $this->TOrganisatie = $TOrganisatie;
      return $this;
    }

}
