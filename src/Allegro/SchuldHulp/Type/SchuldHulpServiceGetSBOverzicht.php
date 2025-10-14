<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSBOverzicht implements RequestInterface
{
    /**
     * @var int
     */
    private $aRelatieCode;

    /**
     * Constructor
     *
     * @param int $aRelatieCode
     */
    public function __construct($aRelatieCode)
    {
        $this->aRelatieCode = $aRelatieCode;
    }

    /**
     * @return int
     */
    public function getARelatieCode()
    {
        return $this->aRelatieCode;
    }

    /**
     * @param int $aRelatieCode
     * @return SchuldHulpServiceGetSBOverzicht
     */
    public function withARelatieCode($aRelatieCode)
    {
        $new = clone $this;
        $new->aRelatieCode = $aRelatieCode;

        return $new;
    }
}

