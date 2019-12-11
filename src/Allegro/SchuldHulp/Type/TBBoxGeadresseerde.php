<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxGeadresseerde implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    private $Medewerker;

    /**
     * @var string
     */
    private $Informatie;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Medewerker
     * @var string $Informatie
     */
    public function __construct($Medewerker, $Informatie)
    {
        $this->Medewerker = $Medewerker;
        $this->Informatie = $Informatie;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Medewerker
     * @return TBBoxGeadresseerde
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getInformatie()
    {
        return $this->Informatie;
    }

    /**
     * @param string $Informatie
     * @return TBBoxGeadresseerde
     */
    public function withInformatie($Informatie)
    {
        $new = clone $this;
        $new->Informatie = $Informatie;

        return $new;
    }


}

