<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class SimpleDataResult
{
    /**
     * @var string
     */
    private $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray
     */
    private $FieldInfo;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray
     */
    public function getFieldInfo()
    {
        return $this->FieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray $FieldInfo
     * @return SimpleDataResult
     */
    public function withFieldInfo($FieldInfo)
    {
        $new = clone $this;
        $new->FieldInfo = $FieldInfo;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray $Data
     * @return SimpleDataResult
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }
}

