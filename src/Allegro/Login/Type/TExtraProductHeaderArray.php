<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TExtraProductHeaderArray implements RequestInterface
{

    /**
     * @var TExtraProductHeader
     */
    private $TExtraProductHeader;

    /**
     * Constructor
     *
     * @var TExtraProductHeader $TExtraProductHeader
     */
    public function __construct($TExtraProductHeader)
    {
        $this->TExtraProductHeader = $TExtraProductHeader;
    }

    /**
     * @return TExtraProductHeader
     */
    public function getTExtraProductHeader()
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param TExtraProductHeader $TExtraProductHeader
     * @return TExtraProductHeaderArray
     */
    public function withTExtraProductHeader($TExtraProductHeader)
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }


}

