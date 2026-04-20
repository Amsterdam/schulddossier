<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo
     */
    private $TableRequestInfo;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo $TableRequestInfo
     */
    public function __construct($TableRequestInfo)
    {
        $this->TableRequestInfo = $TableRequestInfo;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo
     */
    public function getTableRequestInfo()
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo $TableRequestInfo
     * @return TableRequestInfoArray
     */
    public function withTableRequestInfo($TableRequestInfo)
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }
}
