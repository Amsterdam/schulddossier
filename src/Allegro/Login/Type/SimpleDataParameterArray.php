<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDataParameterArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameter>
     */
    private array $SimpleDataParameter;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameter>
     */
    public function getSimpleDataParameter() : array
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameter> $SimpleDataParameter
     * @return static
     */
    public function withSimpleDataParameter(array $SimpleDataParameter) : static
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }
}

