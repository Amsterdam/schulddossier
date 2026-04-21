<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebMagAanmelden implements RequestInterface
{
    /**
     * @var int
     */
    private $aRelatieCode;

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
     * @param int $aRelatieCode
     * @param string $aAllegroAanmeldcode
     * @param string $aAllegroWachtwoord
     */
    public function __construct($aRelatieCode, $aAllegroAanmeldcode, $aAllegroWachtwoord)
    {
        $this->aRelatieCode = $aRelatieCode;
        $this->aAllegroAanmeldcode = $aAllegroAanmeldcode;
        $this->aAllegroWachtwoord = $aAllegroWachtwoord;
    }

    /**
     * @return int
     */
    public function getARelatieCode()
    {
        return $this->aRelatieCode;
    }

    /**
     * @param int $aRelatieCode
     * @return LoginServiceAllegroWebMagAanmelden
     */
    public function withARelatieCode($aRelatieCode)
    {
        $new = clone $this;
        $new->aRelatieCode = $aRelatieCode;

        return $new;
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
     * @return LoginServiceAllegroWebMagAanmelden
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
     * @return LoginServiceAllegroWebMagAanmelden
     */
    public function withAAllegroWachtwoord($aAllegroWachtwoord)
    {
        $new = clone $this;
        $new->aAllegroWachtwoord = $aAllegroWachtwoord;

        return $new;
    }
}

