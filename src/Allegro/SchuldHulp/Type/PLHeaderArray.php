<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PLHeaderArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
     */
    private $TPLHeader;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $TPLHeader
     */
    public function __construct($TPLHeader)
    {
        $this->TPLHeader = $TPLHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
     */
    public function getTPLHeader()
    {
        return $this->TPLHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $TPLHeader
     * @return PLHeaderArray
     */
    public function withTPLHeader($TPLHeader)
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }
}
