<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TableRequestInfoArray
{

    /**
     * @var TableRequestInfo[] $TableRequestInfo
     */
    protected $TableRequestInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TableRequestInfo[]
     */
    public function getTableRequestInfo()
    {
      return $this->TableRequestInfo;
    }

    /**
     * @param TableRequestInfo[] $TableRequestInfo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfoArray
     */
    public function setTableRequestInfo(array $TableRequestInfo = null)
    {
      $this->TableRequestInfo = $TableRequestInfo;
      return $this;
    }

}
