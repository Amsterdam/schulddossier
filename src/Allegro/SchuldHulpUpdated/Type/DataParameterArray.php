<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class DataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\DataParameter
     */
    private $DataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\DataParameter
     */
    public function getDataParameter()
    {
        return $this->DataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\DataParameter $DataParameter
     * @return DataParameterArray
     */
    public function withDataParameter($DataParameter)
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}
