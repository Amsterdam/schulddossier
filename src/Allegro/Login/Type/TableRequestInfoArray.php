<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoArray implements RequestInterface
{

    /**
     * @var TableRequestInfo
     */
    private $TableRequestInfo;

    /**
     * Constructor
     *
     * @var TableRequestInfo $TableRequestInfo
     */
    public function __construct($TableRequestInfo)
    {
        $this->TableRequestInfo = $TableRequestInfo;
    }

    /**
     * @return TableRequestInfo
     */
    public function getTableRequestInfo()
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param TableRequestInfo $TableRequestInfo
     * @return TableRequestInfoArray
     */
    public function withTableRequestInfo($TableRequestInfo)
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }


}

