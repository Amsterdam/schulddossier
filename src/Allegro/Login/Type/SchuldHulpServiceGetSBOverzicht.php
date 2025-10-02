<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSBOverzicht implements RequestInterface
{
    /**
     * @var int
     */
    private int $aRelatieCode;

    /**
     * Constructor
     *
     * @param int $aRelatieCode
     */
    public function __construct(int $aRelatieCode)
    {
        $this->aRelatieCode = $aRelatieCode;
    }

    /**
     * @return int
     */
    public function getARelatieCode() : int
    {
        return $this->aRelatieCode;
    }

    /**
     * @param int $aRelatieCode
     * @return static
     */
    public function withARelatieCode(int $aRelatieCode) : static
    {
        $new = clone $this;
        $new->aRelatieCode = $aRelatieCode;

        return $new;
    }
}

