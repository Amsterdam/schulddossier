<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class DataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\DataParameter
     */
    private $DataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\DataParameter
     */
    public function getDataParameter()
    {
        return $this->DataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\DataParameter $DataParameter
     * @return DataParameterArray
     */
    public function withDataParameter($DataParameter)
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}

