<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class DataParameterArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter>
     */
    private array $DataParameter;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter>
     */
    public function getDataParameter() : array
    {
        return $this->DataParameter;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter> $DataParameter
     * @return static
     */
    public function withDataParameter(array $DataParameter) : static
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}

