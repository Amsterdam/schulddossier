<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo
     */
    private $TableRequestInfo;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo $TableRequestInfo
     */
    public function __construct($TableRequestInfo)
    {
        $this->TableRequestInfo = $TableRequestInfo;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo
     */
    public function getTableRequestInfo()
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo $TableRequestInfo
     * @return TableRequestInfoArray
     */
    public function withTableRequestInfo($TableRequestInfo)
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }


}

