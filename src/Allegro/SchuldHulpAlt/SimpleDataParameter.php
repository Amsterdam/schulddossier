<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDataParameter
{

    /**
     * @var SimpleDataType $DataType
     */
    protected $DataType = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param SimpleDataType $DataType
     * @param string $Name
     * @param string $Value
     */
    public function __construct($DataType, $Name, $Value)
    {
      $this->DataType = $DataType;
      $this->Name = $Name;
      $this->Value = $Value;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataParameter
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataParameter
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataParameter
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
