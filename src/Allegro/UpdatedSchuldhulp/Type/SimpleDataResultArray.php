<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SimpleDataResultArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDataResult
     */
    private $SimpleDataResult;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDataResult
     */
    public function getSimpleDataResult()
    {
        return $this->SimpleDataResult;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDataResult $SimpleDataResult
     * @return SimpleDataResultArray
     */
    public function withSimpleDataResult($SimpleDataResult)
    {
        $new = clone $this;
        $new->SimpleDataResult = $SimpleDataResult;

        return $new;
    }
}

