<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class BBRVormArray implements RequestInterface
{

    /**
     * @var TBBRVorm
     */
    private $TBBRVorm;

    /**
     * Constructor
     *
     * @var TBBRVorm $TBBRVorm
     */
    public function __construct($TBBRVorm)
    {
        $this->TBBRVorm = $TBBRVorm;
    }

    /**
     * @return TBBRVorm
     */
    public function getTBBRVorm()
    {
        return $this->TBBRVorm;
    }

    /**
     * @param TBBRVorm $TBBRVorm
     * @return BBRVormArray
     */
    public function withTBBRVorm($TBBRVorm)
    {
        $new = clone $this;
        $new->TBBRVorm = $TBBRVorm;

        return $new;
    }


}

