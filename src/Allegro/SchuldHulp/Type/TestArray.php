<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TestArray implements RequestInterface
{
    /**
     * Struct met 2 properties:
     *  1) Veld1 van het type WideString
     *  2) Veld2 van het type Integer
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTest>
     */
    private array $TTest;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTest> $TTest
     */
    public function __construct(array $TTest)
    {
        $this->TTest = $TTest;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTest>
     */
    public function getTTest() : array
    {
        return $this->TTest;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTest> $TTest
     * @return static
     */
    public function withTTest(array $TTest) : static
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}

