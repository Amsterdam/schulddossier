<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleFieldInfo
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataType $DataType;

    /**
     * @var bool
     */
    private bool $Hidden;

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
     * @return bool
     */
    public function getHidden() : bool
    {
        return $this->Hidden;
    }

    /**
     * @param bool $Hidden
     * @return static
     */
    public function withHidden(bool $Hidden) : static
    {
        $new = clone $this;
        $new->Hidden = $Hidden;

        return $new;
    }
}

