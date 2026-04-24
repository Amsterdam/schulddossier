<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebMagAanmelden implements RequestInterface
{
    /**
     * @var int
     */
    private int $aRelatieCode;

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
     * @param int $aRelatieCode
     * @param string $aAllegroAanmeldcode
     * @param string $aAllegroWachtwoord
     */
    public function __construct(int $aRelatieCode, string $aAllegroAanmeldcode, string $aAllegroWachtwoord)
    {
        $this->aRelatieCode = $aRelatieCode;
        $this->aAllegroAanmeldcode = $aAllegroAanmeldcode;
        $this->aAllegroWachtwoord = $aAllegroWachtwoord;
    }

    /**
     * @return int
     */
    public function getARelatieCode(): int
    {
        return $this->aRelatieCode;
    }

    /**
     * @param int $aRelatieCode
     * @return static
     */
    public function withARelatieCode(int $aRelatieCode): static
    {
        $new = clone $this;
        $new->aRelatieCode = $aRelatieCode;

        return $new;
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

