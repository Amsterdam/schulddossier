<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SimpleDataResult
{
    /**
     * @var string
     */
    private $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleFieldInfoArray
     */
    private $FieldInfo;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArrayArray
     */
    private $Data;

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return SimpleDataResult
     */
    public function withTableName($TableName)
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleFieldInfoArray
     */
    public function getFieldInfo()
    {
        return $this->FieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleFieldInfoArray $FieldInfo
     * @return SimpleDataResult
     */
    public function withFieldInfo($FieldInfo)
    {
        $new = clone $this;
        $new->FieldInfo = $FieldInfo;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArrayArray
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArrayArray $Data
     * @return SimpleDataResult
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }
}
