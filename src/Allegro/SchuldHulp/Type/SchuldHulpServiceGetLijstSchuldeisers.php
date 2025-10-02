<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetLijstSchuldeisers implements RequestInterface
{
    /**
     * @var string
     */
    private string $aZoekargument;

    /**
     * Constructor
     *
     * @param string $aZoekargument
     */
    public function __construct(string $aZoekargument)
    {
        $this->aZoekargument = $aZoekargument;
    }

    /**
     * @return string
     */
    public function getAZoekargument() : string
    {
        return $this->aZoekargument;
    }

    /**
     * @param string $aZoekargument
     * @return static
     */
    public function withAZoekargument(string $aZoekargument) : static
    {
        $new = clone $this;
        $new->aZoekargument = $aZoekargument;

        return $new;
    }
}

