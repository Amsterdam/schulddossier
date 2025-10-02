<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SRVAanvraagHeaderArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader>
     */
    private array $TSRVAanvraagHeader;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader> $TSRVAanvraagHeader
     */
    public function __construct(array $TSRVAanvraagHeader)
    {
        $this->TSRVAanvraagHeader = $TSRVAanvraagHeader;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader>
     */
    public function getTSRVAanvraagHeader() : array
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader> $TSRVAanvraagHeader
     * @return static
     */
    public function withTSRVAanvraagHeader(array $TSRVAanvraagHeader) : static
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

