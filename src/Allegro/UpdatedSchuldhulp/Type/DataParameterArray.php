<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class DataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\DataParameter
     */
    private $DataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\DataParameter
     */
    public function getDataParameter()
    {
        return $this->DataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\DataParameter $DataParameter
     * @return DataParameterArray
     */
    public function withDataParameter($DataParameter)
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}

