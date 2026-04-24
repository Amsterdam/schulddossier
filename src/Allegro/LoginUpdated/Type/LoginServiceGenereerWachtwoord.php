<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceGenereerWachtwoord implements RequestInterface
{
    /**
     * @var string
     */
    private string $Email;

    /**
     * Constructor
     *
     * @param string $Email
     */
    public function __construct(string $Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return static
     */
    public function withEmail(string $Email): static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }
}

