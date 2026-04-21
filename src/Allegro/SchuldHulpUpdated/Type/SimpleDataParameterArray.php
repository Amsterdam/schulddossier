<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SimpleDataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDataParameter
     */
    private $SimpleDataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDataParameter
     */
    public function getSimpleDataParameter()
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDataParameter $SimpleDataParameter
     * @return SimpleDataParameterArray
     */
    public function withSimpleDataParameter($SimpleDataParameter)
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }
}

