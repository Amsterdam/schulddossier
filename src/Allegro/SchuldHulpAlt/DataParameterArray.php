<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class DataParameterArray
{

    /**
     * @var DataParameter[] $DataParameter
     */
    protected $DataParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataParameter[]
     */
    public function getDataParameter()
    {
      return $this->DataParameter;
    }

    /**
     * @param DataParameter[] $DataParameter
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\DataParameterArray
     */
    public function setDataParameter(array $DataParameter = null)
    {
      $this->DataParameter = $DataParameter;
      return $this;
    }

}
