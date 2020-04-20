<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataResultArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResult
     */
    private $SimpleDataResult;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResult $SimpleDataResult
     */
    public function __construct($SimpleDataResult)
    {
        $this->SimpleDataResult = $SimpleDataResult;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResult
     */
    public function getSimpleDataResult()
    {
        return $this->SimpleDataResult;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResult $SimpleDataResult
     * @return SimpleDataResultArray
     */
    public function withSimpleDataResult($SimpleDataResult)
    {
        $new = clone $this;
        $new->SimpleDataResult = $SimpleDataResult;

        return $new;
    }


}

