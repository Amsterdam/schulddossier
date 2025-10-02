<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfo implements RequestInterface
{
    /**
     * @var string
     */
    private string $UserFilter;

    /**
     * @var bool
     */
    private bool $IncludeSchema;

    /**
     * @var int
     */
    private int $MaxRecords;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray $Parameters;

    /**
     * Constructor
     *
     * @param string $UserFilter
     * @param bool $IncludeSchema
     * @param int $MaxRecords
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray $Parameters
     */
    public function __construct(string $UserFilter, bool $IncludeSchema, int $MaxRecords, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray $Parameters)
    {
        $this->UserFilter = $UserFilter;
        $this->IncludeSchema = $IncludeSchema;
        $this->MaxRecords = $MaxRecords;
        $this->Parameters = $Parameters;
    }

    /**
     * @return string
     */
    public function getUserFilter() : string
    {
        return $this->UserFilter;
    }

    /**
     * @param string $UserFilter
     * @return static
     */
    public function withUserFilter(string $UserFilter) : static
    {
        $new = clone $this;
        $new->UserFilter = $UserFilter;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray
     */
    public function getParameters() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray
    {
        return $this->Parameters;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray $Parameters
     * @return static
     */
    public function withParameters(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray $Parameters) : static
    {
        $new = clone $this;
        $new->Parameters = $Parameters;

        return $new;
    }
}

