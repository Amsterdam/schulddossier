<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceCheckWachtwoord implements RequestInterface
{
    /**
     * @var string
     */
    private $sEmailAdres;

    /**
     * Constructor
     *
     * @var string $sEmailAdres
     */
    public function __construct($sEmailAdres)
    {
        $this->sEmailAdres = $sEmailAdres;
    }

    /**
     * @return string
     */
    public function getSEmailAdres()
    {
        return $this->sEmailAdres;
    }

    /**
     * @param string $sEmailAdres
     * @return LoginServiceCheckWachtwoord
     */
    public function withSEmailAdres($sEmailAdres)
    {
        $new = clone $this;
        $new->sEmailAdres = $sEmailAdres;

        return $new;
    }
}
