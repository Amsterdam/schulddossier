<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class CasusHeaderArray implements RequestInterface
{

    /**
     * @var TCasusHeader
     */
    private $TCasusHeader;

    /**
     * Constructor
     *
     * @var TCasusHeader $TCasusHeader
     */
    public function __construct($TCasusHeader)
    {
        $this->TCasusHeader = $TCasusHeader;
    }

    /**
     * @return TCasusHeader
     */
    public function getTCasusHeader()
    {
        return $this->TCasusHeader;
    }

    /**
     * @param TCasusHeader $TCasusHeader
     * @return CasusHeaderArray
     */
    public function withTCasusHeader($TCasusHeader)
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }


}

