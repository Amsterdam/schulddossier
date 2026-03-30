<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TableRequestInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TableRequestInfo
     */
    private $TableRequestInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TableRequestInfo
     */
    public function getTableRequestInfo()
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TableRequestInfo $TableRequestInfo
     * @return TableRequestInfoArray
     */
    public function withTableRequestInfo($TableRequestInfo)
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }
}

