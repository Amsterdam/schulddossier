<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SRVEiserArray implements RequestInterface
{

    /**
     * @var TSRVEiser
     */
    private $TSRVEiser;

    /**
     * Constructor
     *
     * @var TSRVEiser $TSRVEiser
     */
    public function __construct($TSRVEiser)
    {
        $this->TSRVEiser = $TSRVEiser;
    }

    /**
     * @return TSRVEiser
     */
    public function getTSRVEiser()
    {
        return $this->TSRVEiser;
    }

    /**
     * @param TSRVEiser $TSRVEiser
     * @return SRVEiserArray
     */
    public function withTSRVEiser($TSRVEiser)
    {
        $new = clone $this;
        $new->TSRVEiser = $TSRVEiser;

        return $new;
    }


}

