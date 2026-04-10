<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleDataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDataParameter
     */
    private $SimpleDataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDataParameter
     */
    public function getSimpleDataParameter()
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDataParameter $SimpleDataParameter
     * @return SimpleDataParameterArray
     */
    public function withSimpleDataParameter($SimpleDataParameter)
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }
}

