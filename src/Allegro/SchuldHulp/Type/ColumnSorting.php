<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ColumnSorting implements RequestInterface
{
    /**
     * @var string
     */
    private string $FieldName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection $SortDirection;

    /**
     * Constructor
     *
     * @param string $FieldName
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection $SortDirection
     */
    public function __construct(string $FieldName, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection $SortDirection)
    {
        $this->FieldName = $FieldName;
        $this->SortDirection = $SortDirection;
    }

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return static
     */
    public function withFieldName(string $FieldName) : static
    {
        $new = clone $this;
        $new->FieldName = $FieldName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection
     */
    public function getSortDirection() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection
    {
        return $this->SortDirection;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection $SortDirection
     * @return static
     */
    public function withSortDirection(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSortDirection $SortDirection) : static
    {
        $new = clone $this;
        $new->SortDirection = $SortDirection;

        return $new;
    }
}

