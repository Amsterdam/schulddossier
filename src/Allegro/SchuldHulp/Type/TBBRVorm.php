<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBRVorm implements RequestInterface
{
    /**
     * @var string
     */
    private string $BBRVormCode;

    /**
     * @var string
     */
    private string $BBRVormOmschrijving;

    /**
     * Constructor
     *
     * @param string $BBRVormCode
     * @param string $BBRVormOmschrijving
     */
    public function __construct(string $BBRVormCode, string $BBRVormOmschrijving)
    {
        $this->BBRVormCode = $BBRVormCode;
        $this->BBRVormOmschrijving = $BBRVormOmschrijving;
    }

    /**
     * @return string
     */
    public function getBBRVormCode() : string
    {
        return $this->BBRVormCode;
    }

    /**
     * @param string $BBRVormCode
     * @return static
     */
    public function withBBRVormCode(string $BBRVormCode) : static
    {
        $new = clone $this;
        $new->BBRVormCode = $BBRVormCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBBRVormOmschrijving() : string
    {
        return $this->BBRVormOmschrijving;
    }

    /**
     * @param string $BBRVormOmschrijving
     * @return static
     */
    public function withBBRVormOmschrijving(string $BBRVormOmschrijving) : static
    {
        $new = clone $this;
        $new->BBRVormOmschrijving = $BBRVormOmschrijving;

        return $new;
    }
}

