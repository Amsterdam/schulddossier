<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class ColumnSorting
{
    /**
     * @var string
     */
    private string $FieldName;

    /**
     * @var 'Ascending' | 'Descending'
     */
    private string $SortDirection;

    /**
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return static
     */
    public function withFieldName(string $FieldName): static
    {
        $new = clone $this;
        $new->FieldName = $FieldName;

        return $new;
    }

    /**
     * @return 'Ascending' | 'Descending'
     */
    public function getSortDirection(): string
    {
        return $this->SortDirection;
    }

    /**
     * @param 'Ascending' | 'Descending' $SortDirection
     * @return static
     */
    public function withSortDirection(string $SortDirection): static
    {
        $new = clone $this;
        $new->SortDirection = $SortDirection;

        return $new;
    }
}

