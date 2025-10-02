<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDelta
{
    /**
     * @var string
     */
    private string $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $Fields;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray $Rows;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
     */
    public function getFields() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
    {
        return $this->Fields;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $Fields
     * @return static
     */
    public function withFields(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $Fields) : static
    {
        $new = clone $this;
        $new->Fields = $Fields;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray
     */
    public function getRows() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray
    {
        return $this->Rows;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray $Rows
     * @return static
     */
    public function withRows(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray $Rows) : static
    {
        $new = clone $this;
        $new->Rows = $Rows;

        return $new;
    }
}

