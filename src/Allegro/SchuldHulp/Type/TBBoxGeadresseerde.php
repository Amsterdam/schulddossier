<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TBBoxGeadresseerde implements RequestInterface
{

    /**
     * @var TMedewerker
     */
    private $Medewerker;

    /**
     * @var string
     */
    private $Informatie;

    /**
     * Constructor
     *
     * @var TMedewerker $Medewerker
     * @var string $Informatie
     */
    public function __construct($Medewerker, $Informatie)
    {
        $this->Medewerker = $Medewerker;
        $this->Informatie = $Informatie;
    }

    /**
     * @return TMedewerker
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param TMedewerker $Medewerker
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

