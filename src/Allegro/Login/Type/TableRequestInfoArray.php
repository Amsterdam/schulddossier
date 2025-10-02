<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TableRequestInfoArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo>
     */
    private array $TableRequestInfo;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo>
     */
    public function getTableRequestInfo() : array
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo> $TableRequestInfo
     * @return static
     */
    public function withTableRequestInfo(array $TableRequestInfo) : static
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }
}

