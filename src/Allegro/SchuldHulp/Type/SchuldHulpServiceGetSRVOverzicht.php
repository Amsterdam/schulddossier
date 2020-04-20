<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSRVOverzicht implements RequestInterface
{

    /**
     * @var int
     */
    private $aRelatieCode;

    /**
     * Constructor
     *
     * @var int $aRelatieCode
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
     * @return SchuldHulpServiceGetSRVOverzicht
     */
    public function withARelatieCode($aRelatieCode)
    {
        $new = clone $this;
        $new->aRelatieCode = $aRelatieCode;

        return $new;
    }


}

