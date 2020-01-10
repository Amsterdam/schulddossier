<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetLijstSchuldeisers implements RequestInterface
{

    /**
     * @var string
     */
    private $aZoekargument;

    /**
     * Constructor
     *
     * @var string $aZoekargument
     */
    public function __construct($aZoekargument)
    {
        $this->aZoekargument = $aZoekargument;
    }

    /**
     * @return string
     */
    public function getAZoekargument()
    {
        return $this->aZoekargument;
    }

    /**
     * @param string $aZoekargument
     * @return SchuldHulpServiceGetLijstSchuldeisers
     */
    public function withAZoekargument($aZoekargument)
    {
        $new = clone $this;
        $new->aZoekargument = $aZoekargument;

        return $new;
    }


}

