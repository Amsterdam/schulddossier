<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SimpleDataParameterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDataParameter
     */
    private $SimpleDataParameter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDataParameter
     */
    public function getSimpleDataParameter()
    {
        return $this->SimpleDataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDataParameter $SimpleDataParameter
     * @return SimpleDataParameterArray
     */
    public function withSimpleDataParameter($SimpleDataParameter)
    {
        $new = clone $this;
        $new->SimpleDataParameter = $SimpleDataParameter;

        return $new;
    }
}

