<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class ColumnSorting
{
    /**
     * @var string
     */
    private string $FieldName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSortDirection
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSortDirection $SortDirection;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSortDirection
     */
    public function getSortDirection(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSortDirection
    {
        return $this->SortDirection;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSortDirection $SortDirection
     * @return static
     */
    public function withSortDirection(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSortDirection $SortDirection): static
    {
        $new = clone $this;
        $new->SortDirection = $SortDirection;

        return $new;
    }
}

