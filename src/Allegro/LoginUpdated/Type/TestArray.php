<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TestArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTest
     */
    private $TTest;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTest
     */
    public function getTTest()
    {
        return $this->TTest;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TTest $TTest
     * @return TestArray
     */
    public function withTTest($TTest)
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}

