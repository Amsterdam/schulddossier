<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class DataParameter
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var mixed
     */
    private mixed $Value;

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
     * @return mixed
     */
    public function getValue() : mixed
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     * @return static
     */
    public function withValue(mixed $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

