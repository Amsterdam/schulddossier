<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RCHeaderArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader
     */
    private $TRCHeader;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader $TRCHeader
     */
    public function __construct($TRCHeader)
    {
        $this->TRCHeader = $TRCHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader
     */
    public function getTRCHeader()
    {
        return $this->TRCHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader $TRCHeader
     * @return RCHeaderArray
     */
    public function withTRCHeader($TRCHeader)
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }
}
