<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDataResultArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataResult>
     */
    private array $SimpleDataResult;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataResult>
     */
    public function getSimpleDataResult() : array
    {
        return $this->SimpleDataResult;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataResult> $SimpleDataResult
     * @return static
     */
    public function withSimpleDataResult(array $SimpleDataResult) : static
    {
        $new = clone $this;
        $new->SimpleDataResult = $SimpleDataResult;

        return $new;
    }
}

