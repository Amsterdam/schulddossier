<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TestArray implements RequestInterface
{

    /**
     * @var TTest
     */
    private $TTest;

    /**
     * Constructor
     *
     * @var TTest $TTest
     */
    public function __construct($TTest)
    {
        $this->TTest = $TTest;
    }

    /**
     * @return TTest
     */
    public function getTTest()
    {
        return $this->TTest;
    }

    /**
     * @param TTest $TTest
     * @return TestArray
     */
    public function withTTest($TTest)
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }


}

