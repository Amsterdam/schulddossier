<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ColumnSorting implements RequestInterface
{

    /**
     * @var string
     */
    private $FieldName;

    /**
     * @var string
     */
    private $SortDirection;

    /**
     * Constructor
     *
     * @var string $FieldName
     * @var string $SortDirection
     */
    public function __construct($FieldName, $SortDirection)
    {
        $this->FieldName = $FieldName;
        $this->SortDirection = $SortDirection;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return ColumnSorting
     */
    public function withFieldName($FieldName)
    {
        $new = clone $this;
        $new->FieldName = $FieldName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSortDirection()
    {
        return $this->SortDirection;
    }

    /**
     * @param string $SortDirection
     * @return ColumnSorting
     */
    public function withSortDirection($SortDirection)
    {
        $new = clone $this;
        $new->SortDirection = $SortDirection;

        return $new;
    }


}

