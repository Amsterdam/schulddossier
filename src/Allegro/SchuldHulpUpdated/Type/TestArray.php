<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TestArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTest
     */
    private $TTest;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTest
     */
    public function getTTest()
    {
        return $this->TTest;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTest $TTest
     * @return TestArray
     */
    public function withTTest($TTest)
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}

