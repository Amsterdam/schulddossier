<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebLoginTijdelijk implements RequestInterface
{
    /**
     * @var string
     */
    private $aAllegroAanmeldcode;

    /**
     * @var string
     */
    private $aAllegroWachtwoord;

    /**
     * Constructor
     *
     * @param string $aAllegroAanmeldcode
     * @param string $aAllegroWachtwoord
     */
    public function __construct($aAllegroAanmeldcode, $aAllegroWachtwoord)
    {
        $this->aAllegroAanmeldcode = $aAllegroAanmeldcode;
        $this->aAllegroWachtwoord = $aAllegroWachtwoord;
    }

    /**
     * @return string
     */
    public function getAAllegroAanmeldcode()
    {
        return $this->aAllegroAanmeldcode;
    }

    /**
     * @param string $aAllegroAanmeldcode
     * @return LoginServiceAllegroWebLoginTijdelijk
     */
    public function withAAllegroAanmeldcode($aAllegroAanmeldcode)
    {
        $new = clone $this;
        $new->aAllegroAanmeldcode = $aAllegroAanmeldcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAAllegroWachtwoord()
    {
        return $this->aAllegroWachtwoord;
    }

    /**
     * @param string $aAllegroWachtwoord
     * @return LoginServiceAllegroWebLoginTijdelijk
     */
    public function withAAllegroWachtwoord($aAllegroWachtwoord)
    {
        $new = clone $this;
        $new->aAllegroWachtwoord = $aAllegroWachtwoord;

        return $new;
    }
}

