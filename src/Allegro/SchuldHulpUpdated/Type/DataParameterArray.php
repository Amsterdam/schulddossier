<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class DataParameterArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\DataParameter>
     */
    private array $DataParameter;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\DataParameter>
     */
    public function getDataParameter(): array
    {
        return $this->DataParameter;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\DataParameter> $DataParameter
     * @return static
     */
    public function withDataParameter(array $DataParameter): static
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }
}

