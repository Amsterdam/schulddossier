<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleRequestInfo
{
    /**
     * @var string
     */
    private string $SQL;

    /**
     * @var string
     */
    private string $Table;

    /**
     * @var string
     */
    private string $Where;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray $Parameters;

    /**
     * @var int
     */
    private int $MaxRecords;

    /**
     * @var bool
     */
    private bool $IncludeSchema;

    /**
     * @var bool
     */
    private bool $SimpleMode;

    /**
     * @return string
     */
    public function getSQL() : string
    {
        return $this->SQL;
    }

    /**
     * @param string $SQL
     * @return static
     */
    public function withSQL(string $SQL) : static
    {
        $new = clone $this;
        $new->SQL = $SQL;

        return $new;
    }

    /**
     * @return string
     */
    public function getTable() : string
    {
        return $this->Table;
    }

    /**
     * @param string $Table
     * @return static
     */
    public function withTable(string $Table) : static
    {
        $new = clone $this;
        $new->Table = $Table;

        return $new;
    }

    /**
     * @return string
     */
    public function getWhere() : string
    {
        return $this->Where;
    }

    /**
     * @param string $Where
     * @return static
     */
    public function withWhere(string $Where) : static
    {
        $new = clone $this;
        $new->Where = $Where;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray
     */
    public function getParameters() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray
    {
        return $this->Parameters;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray $Parameters
     * @return static
     */
    public function withParameters(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray $Parameters) : static
    {
        $new = clone $this;
        $new->Parameters = $Parameters;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxRecords() : int
    {
        return $this->MaxRecords;
    }

    /**
     * @param int $MaxRecords
     * @return static
     */
    public function withMaxRecords(int $MaxRecords) : static
    {
        $new = clone $this;
        $new->MaxRecords = $MaxRecords;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeSchema() : bool
    {
        return $this->IncludeSchema;
    }

    /**
     * @param bool $IncludeSchema
     * @return static
     */
    public function withIncludeSchema(bool $IncludeSchema) : static
    {
        $new = clone $this;
        $new->IncludeSchema = $IncludeSchema;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSimpleMode() : bool
    {
        return $this->SimpleMode;
    }

    /**
     * @param bool $SimpleMode
     * @return static
     */
    public function withSimpleMode(bool $SimpleMode) : static
    {
        $new = clone $this;
        $new->SimpleMode = $SimpleMode;

        return $new;
    }
}

