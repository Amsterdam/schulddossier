<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebLoginTijdelijk implements RequestInterface
{
    /**
     * @var string
     */
    private string $aAllegroAanmeldcode;

    /**
     * @var string
     */
    private string $aAllegroWachtwoord;

    /**
     * Constructor
     *
     * @param string $aAllegroAanmeldcode
     * @param string $aAllegroWachtwoord
     */
    public function __construct(string $aAllegroAanmeldcode, string $aAllegroWachtwoord)
    {
        $this->aAllegroAanmeldcode = $aAllegroAanmeldcode;
        $this->aAllegroWachtwoord = $aAllegroWachtwoord;
    }

    /**
     * @return string
     */
    public function getAAllegroAanmeldcode(): string
    {
        return $this->aAllegroAanmeldcode;
    }

    /**
     * @param string $aAllegroAanmeldcode
     * @return static
     */
    public function withAAllegroAanmeldcode(string $aAllegroAanmeldcode): static
    {
        $new = clone $this;
        $new->aAllegroAanmeldcode = $aAllegroAanmeldcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAAllegroWachtwoord(): string
    {
        return $this->aAllegroWachtwoord;
    }

    /**
     * @param string $aAllegroWachtwoord
     * @return static
     */
    public function withAAllegroWachtwoord(string $aAllegroWachtwoord): static
    {
        $new = clone $this;
        $new->aAllegroWachtwoord = $aAllegroWachtwoord;

        return $new;
    }
}

