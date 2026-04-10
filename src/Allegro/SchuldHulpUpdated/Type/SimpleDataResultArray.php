<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleDataResultArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDataResult
     */
    private $SimpleDataResult;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDataResult
     */
    public function getSimpleDataResult()
    {
        return $this->SimpleDataResult;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDataResult $SimpleDataResult
     * @return SimpleDataResultArray
     */
    public function withSimpleDataResult($SimpleDataResult)
    {
        $new = clone $this;
        $new->SimpleDataResult = $SimpleDataResult;

        return $new;
    }
}

