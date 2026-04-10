<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class DataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\DataParameter
     */
    private $DataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\DataParameter
     */
    public function getDataParameter()
    {
        return $this->DataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\DataParameter $DataParameter
     * @return DataParameterArray
     */
    public function withDataParameter($DataParameter)
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}

