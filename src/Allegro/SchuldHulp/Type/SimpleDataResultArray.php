<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class SimpleDataResultArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResult
     */
    private $SimpleDataResult;

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

