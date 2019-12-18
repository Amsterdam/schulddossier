<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TExtraProductHeaderArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader
     */
    private $TExtraProductHeader;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader $TExtraProductHeader
     */
    public function __construct($TExtraProductHeader)
    {
        $this->TExtraProductHeader = $TExtraProductHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader
     */
    public function getTExtraProductHeader()
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader $TExtraProductHeader
     * @return TExtraProductHeaderArray
     */
    public function withTExtraProductHeader($TExtraProductHeader)
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }


}

