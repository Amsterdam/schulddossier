<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebLogin implements RequestInterface
{
    /**
     * @var string
     */
    private string $aUsername;

    /**
     * @var string
     */
    private string $aPassword;

    /**
     * Constructor
     *
     * @param string $aUsername
     * @param string $aPassword
     */
    public function __construct(string $aUsername, string $aPassword)
    {
        $this->aUsername = $aUsername;
        $this->aPassword = $aPassword;
    }

    /**
     * @return string
     */
    public function getAUsername(): string
    {
        return $this->aUsername;
    }

    /**
     * @param string $aUsername
     * @return static
     */
    public function withAUsername(string $aUsername): static
    {
        $new = clone $this;
        $new->aUsername = $aUsername;

        return $new;
    }

    /**
     * @return string
     */
    public function getAPassword(): string
    {
        return $this->aPassword;
    }

    /**
     * @param string $aPassword
     * @return static
     */
    public function withAPassword(string $aPassword): static
    {
        $new = clone $this;
        $new->aPassword = $aPassword;

        return $new;
    }
}

