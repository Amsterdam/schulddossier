<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceActiveerRegistratie implements RequestInterface
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var string
     */
    private string $RegistratieCode;

    /**
     * Constructor
     *
     * @param int $RelatieCode
     * @param string $RegistratieCode
     */
    public function __construct(int $RelatieCode, string $RegistratieCode)
    {
        $this->RelatieCode = $RelatieCode;
        $this->RegistratieCode = $RegistratieCode;
    }

    /**
     * @return int
     */
    public function getRelatieCode(): int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode): static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistratieCode(): string
    {
        return $this->RegistratieCode;
    }

    /**
     * @param string $RegistratieCode
     * @return static
     */
    public function withRegistratieCode(string $RegistratieCode): static
    {
        $new = clone $this;
        $new->RegistratieCode = $RegistratieCode;

        return $new;
    }
}

