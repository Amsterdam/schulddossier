<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDataParameter
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType $DataType;

    /**
     * @var string
     */
    private string $Name;

    /**
     * @var string
     */
    private string $Value;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType
     */
    public function getDataType() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType
    {
        return $this->DataType;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType $DataType
     * @return static
     */
    public function withDataType(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType $DataType) : static
    {
        $new = clone $this;
        $new->DataType = $DataType;

        return $new;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return static
     */
    public function withName(string $Name) : static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return static
     */
    public function withValue(string $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

