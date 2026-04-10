<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TestArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTest
     */
    private $TTest;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTest
     */
    public function getTTest()
    {
        return $this->TTest;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTest $TTest
     * @return TestArray
     */
    public function withTTest($TTest)
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}

