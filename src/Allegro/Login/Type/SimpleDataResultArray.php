<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataResultArray implements RequestInterface
{

    /**
     * @var SimpleDataResult
     */
    private $SimpleDataResult;

    /**
     * Constructor
     *
     * @var SimpleDataResult $SimpleDataResult
     */
    public function __construct($SimpleDataResult)
    {
        $this->SimpleDataResult = $SimpleDataResult;
    }

    /**
     * @return SimpleDataResult
     */
    public function getSimpleDataResult()
    {
        return $this->SimpleDataResult;
    }

    /**
     * @param SimpleDataResult $SimpleDataResult
     * @return SimpleDataResultArray
     */
    public function withSimpleDataResult($SimpleDataResult)
    {
        $new = clone $this;
        $new->SimpleDataResult = $SimpleDataResult;

        return $new;
    }


}

