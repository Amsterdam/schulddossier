<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBoxGeadresseerde
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker;

    /**
     * @var string
     */
    private string $Informatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker
     * @return static
     */
    public function withMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getInformatie() : string
    {
        return $this->Informatie;
    }

    /**
     * @param string $Informatie
     * @return static
     */
    public function withInformatie(string $Informatie) : static
    {
        $new = clone $this;
        $new->Informatie = $Informatie;

        return $new;
    }
}

