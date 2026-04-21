<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TestArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTest
     */
    private $TTest;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTest
     */
    public function getTTest()
    {
        return $this->TTest;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTest $TTest
     * @return TestArray
     */
    public function withTTest($TTest)
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}
