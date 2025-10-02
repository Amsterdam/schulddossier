<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TestArray
{
    /**
     * Struct met 2 properties:
     *  1) Veld1 van het type WideString
     *  2) Veld2 van het type Integer
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTest>
     */
    private array $TTest;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTest>
     */
    public function getTTest() : array
    {
        return $this->TTest;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTest> $TTest
     * @return static
     */
    public function withTTest(array $TTest) : static
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}

