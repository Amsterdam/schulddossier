<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceBSNNaarRelatie implements RequestInterface
{
    /**
     * @var int
     */
    private int $BSN;

    /**
     * Constructor
     *
     * @param int $BSN
     */
    public function __construct(int $BSN)
    {
        $this->BSN = $BSN;
    }

    /**
     * @return int
     */
    public function getBSN(): int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN): static
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }
}

