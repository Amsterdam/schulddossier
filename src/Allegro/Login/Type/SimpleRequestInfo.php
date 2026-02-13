<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleRequestInfo implements RequestInterface
{
    /**
     * @var string
     */
    private $SQL;

    /**
     * @var string
     */
    private $Table;

    /**
     * @var string
     */
    private $Where;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray
     */
    private $Parameters;

    /**
     * @var int
     */
    private $MaxRecords;

    /**
     * @var bool
     */
    private $IncludeSchema;

    /**
     * @var bool
     */
    private $SimpleMode;

    /**
     * Constructor
     *
     * @var string $SQL
     * @var string $Table
     * @var string $Where
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray $Parameters
     * @var int $MaxRecords
     * @var bool $IncludeSchema
     * @var bool $SimpleMode
     */
    public function __construct($SQL, $Table, $Where, $Parameters, $MaxRecords, $IncludeSchema, $SimpleMode)
    {
        $this->SQL = $SQL;
        $this->Table = $Table;
        $this->Where = $Where;
        $this->Parameters = $Parameters;
        $this->MaxRecords = $MaxRecords;
        $this->IncludeSchema = $IncludeSchema;
        $this->SimpleMode = $SimpleMode;
    }

    /**
     * @return string
     */
    public function getSQL()
    {
        return $this->SQL;
    }

    /**
     * @param string $SQL
     * @return SimpleRequestInfo
     */
    public function withSQL($SQL)
    {
        $new = clone $this;
        $new->SQL = $SQL;

        return $new;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->Table;
    }

    /**
     * @param string $Table
     * @return SimpleRequestInfo
     */
    public function withTable($Table)
    {
        $new = clone $this;
        $new->Table = $Table;

        return $new;
    }

    /**
     * @return string
     */
    public function getWhere()
    {
        return $this->Where;
    }

    /**
     * @param string $Where
     * @return SimpleRequestInfo
     */
    public function withWhere($Where)
    {
        $new = clone $this;
        $new->Where = $Where;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray $Parameters
     * @return SimpleRequestInfo
     */
    public function withParameters($Parameters)
    {
        $new = clone $this;
        $new->Parameters = $Parameters;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxRecords()
    {
        return $this->MaxRecords;
    }

    /**
     * @param int $MaxRecords
     * @return SimpleRequestInfo
     */
    public function withMaxRecords($MaxRecords)
    {
        $new = clone $this;
        $new->MaxRecords = $MaxRecords;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeSchema()
    {
        return $this->IncludeSchema;
    }

    /**
     * @param bool $IncludeSchema
     * @return SimpleRequestInfo
     */
    public function withIncludeSchema($IncludeSchema)
    {
        $new = clone $this;
        $new->IncludeSchema = $IncludeSchema;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSimpleMode()
    {
        return $this->SimpleMode;
    }

    /**
     * @param bool $SimpleMode
     * @return SimpleRequestInfo
     */
    public function withSimpleMode($SimpleMode)
    {
        $new = clone $this;
        $new->SimpleMode = $SimpleMode;

        return $new;
    }
}
