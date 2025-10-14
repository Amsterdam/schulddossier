<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class SimpleDataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter
     */
    private $SimpleDataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter
     */
    public function getSimpleDataParameter()
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter $SimpleDataParameter
     * @return SimpleDataParameterArray
     */
    public function withSimpleDataParameter($SimpleDataParameter)
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }
}

