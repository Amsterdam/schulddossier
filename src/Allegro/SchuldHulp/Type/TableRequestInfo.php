<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfo implements RequestInterface
{

    /**
     * @var string
     */
    private $UserFilter;

    /**
     * @var bool
     */
    private $IncludeSchema;

    /**
     * @var int
     */
    private $MaxRecords;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray
     */
    private $Parameters;

    /**
     * Constructor
     *
     * @var string $UserFilter
     * @var bool $IncludeSchema
     * @var int $MaxRecords
     * @var DataParameterArray $Parameters
     */
    public function __construct($UserFilter, $IncludeSchema, $MaxRecords, $Parameters)
    {
        $this->UserFilter = $UserFilter;
        $this->IncludeSchema = $IncludeSchema;
        $this->MaxRecords = $MaxRecords;
        $this->Parameters = $Parameters;
    }

    /**
     * @return string
     */
    public function getUserFilter()
    {
        return $this->UserFilter;
    }

    /**
     * @param string $UserFilter
     * @return TableRequestInfo
     */
    public function withUserFilter($UserFilter)
    {
        $new = clone $this;
        $new->UserFilter = $UserFilter;

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
     * @return TableRequestInfo
     */
    public function withIncludeSchema($IncludeSchema)
    {
        $new = clone $this;
        $new->IncludeSchema = $IncludeSchema;

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
     * @return TableRequestInfo
     */
    public function withMaxRecords($MaxRecords)
    {
        $new = clone $this;
        $new->MaxRecords = $MaxRecords;

        return $new;
    }

    /**
     * @return DataParameterArray
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param DataParameterArray $Parameters
     * @return TableRequestInfo
     */
    public function withParameters($Parameters)
    {
        $new = clone $this;
        $new->Parameters = $Parameters;

        return $new;
    }


}

