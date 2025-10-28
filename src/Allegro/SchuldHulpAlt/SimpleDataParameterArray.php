<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDataParameterArray
{

    /**
     * @var SimpleDataParameter[] $SimpleDataParameter
     */
    protected $SimpleDataParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleDataParameter[]
     */
    public function getSimpleDataParameter()
    {
      return $this->SimpleDataParameter;
    }

    /**
     * @param SimpleDataParameter[] $SimpleDataParameter
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataParameterArray
     */
    public function setSimpleDataParameter(array $SimpleDataParameter = null)
    {
      $this->SimpleDataParameter = $SimpleDataParameter;
      return $this;
    }

}
