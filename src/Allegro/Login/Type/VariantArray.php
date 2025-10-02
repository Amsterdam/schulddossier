<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class VariantArray
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $anyType;

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getAnyType() : array
    {
        return $this->anyType;
    }

    /**
     * @param array<int<0,max>, mixed> $anyType
     * @return static
     */
    public function withAnyType(array $anyType) : static
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}

