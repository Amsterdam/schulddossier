<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceCheckWachtwoord implements RequestInterface
{
    /**
     * @var string
     */
    private string $sEmailAdres;

    /**
     * Constructor
     *
     * @param string $sEmailAdres
     */
    public function __construct(string $sEmailAdres)
    {
        $this->sEmailAdres = $sEmailAdres;
    }

    /**
     * @return string
     */
    public function getSEmailAdres(): string
    {
        return $this->sEmailAdres;
    }

    /**
     * @param string $sEmailAdres
     * @return static
     */
    public function withSEmailAdres(string $sEmailAdres): static
    {
        $new = clone $this;
        $new->sEmailAdres = $sEmailAdres;

        return $new;
    }
}

