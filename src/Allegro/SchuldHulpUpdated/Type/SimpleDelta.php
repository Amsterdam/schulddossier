<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleDelta
{
    /**
     * @var string
     */
    private $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\StringArray
     */
    private $Fields;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDeltaChangeArray
     */
    private $Rows;

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return SimpleDelta
     */
    public function withTableName($TableName)
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\StringArray
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\StringArray $Fields
     * @return SimpleDelta
     */
    public function withFields($Fields)
    {
        $new = clone $this;
        $new->Fields = $Fields;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDeltaChangeArray
     */
    public function getRows()
    {
        return $this->Rows;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDeltaChangeArray $Rows
     * @return SimpleDelta
     */
    public function withRows($Rows)
    {
        $new = clone $this;
        $new->Rows = $Rows;

        return $new;
    }
}

