<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SimpleDelta
{
    /**
     * @var string
     */
    private string $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $Fields;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChangeArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChangeArray $Rows;

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return static
     */
    public function withTableName(string $TableName): static
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    public function getFields(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
    {
        return $this->Fields;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $Fields
     * @return static
     */
    public function withFields(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $Fields): static
    {
        $new = clone $this;
        $new->Fields = $Fields;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChangeArray
     */
    public function getRows(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChangeArray
    {
        return $this->Rows;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChangeArray $Rows
     * @return static
     */
    public function withRows(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChangeArray $Rows): static
    {
        $new = clone $this;
        $new->Rows = $Rows;

        return $new;
    }
}

