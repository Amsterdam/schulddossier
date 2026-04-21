<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceGenereerWachtwoord implements RequestInterface
{
    /**
     * @var string
     */
    private $Email;

    /**
     * Constructor
     *
     * @param string $Email
     */
    public function __construct($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return LoginServiceGenereerWachtwoord
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }
}
