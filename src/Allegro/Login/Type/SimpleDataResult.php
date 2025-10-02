<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDataResult
{
    /**
     * @var string
     */
    private string $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray $FieldInfo;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray $Data;

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return static
     */
    public function withTableName(string $TableName) : static
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray
     */
    public function getFieldInfo() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray
    {
        return $this->FieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray $FieldInfo
     * @return static
     */
    public function withFieldInfo(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray $FieldInfo) : static
    {
        $new = clone $this;
        $new->FieldInfo = $FieldInfo;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray
     */
    public function getData() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray
    {
        return $this->Data;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray $Data
     * @return static
     */
    public function withData(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray $Data) : static
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }
}

