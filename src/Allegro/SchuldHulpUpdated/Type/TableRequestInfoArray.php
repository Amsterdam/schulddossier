<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TableRequestInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TableRequestInfo
     */
    private $TableRequestInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TableRequestInfo
     */
    public function getTableRequestInfo()
    {
        return $this->TableRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TableRequestInfo $TableRequestInfo
     * @return TableRequestInfoArray
     */
    public function withTableRequestInfo($TableRequestInfo)
    {
        $new = clone $this;
        $new->TableRequestInfo = $TableRequestInfo;

        return $new;
    }
}

