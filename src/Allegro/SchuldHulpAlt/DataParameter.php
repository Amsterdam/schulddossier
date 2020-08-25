<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class DataParameter
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var anyType $Value
     */
    protected $Value = null;

    /**
     * @param string $Name
     * @param anyType $Value
     */
    public function __construct($Name, $Value)
    {
      $this->Name = $Name;
      $this->Value = $Value;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\DataParameter
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anyType $Value
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\DataParameter
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
