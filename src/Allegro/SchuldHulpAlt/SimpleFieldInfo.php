<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleFieldInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var SimpleDataType $DataType
     */
    protected $DataType = null;

    /**
     * @var boolean $Hidden
     */
    protected $Hidden = null;

    /**
     * @param string $Name
     * @param SimpleDataType $DataType
     * @param boolean $Hidden
     */
    public function __construct($Name, $DataType, $Hidden)
    {
      $this->Name = $Name;
      $this->DataType = $DataType;
      $this->Hidden = $Hidden;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleFieldInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return SimpleDataType
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param SimpleDataType $DataType
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleFieldInfo
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHidden()
    {
      return $this->Hidden;
    }

    /**
     * @param boolean $Hidden
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleFieldInfo
     */
    public function setHidden($Hidden)
    {
      $this->Hidden = $Hidden;
      return $this;
    }

}
