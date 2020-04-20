<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDeltaChange
{

    /**
     * @var StringArray $OldValues
     */
    protected $OldValues = null;

    /**
     * @var StringArray $NewValues
     */
    protected $NewValues = null;

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var SimpleDataMode $Mode
     */
    protected $Mode = null;

    /**
     * @param StringArray $OldValues
     * @param StringArray $NewValues
     * @param string $Error
     * @param SimpleDataMode $Mode
     */
    public function __construct($OldValues, $NewValues, $Error, $Mode)
    {
      $this->OldValues = $OldValues;
      $this->NewValues = $NewValues;
      $this->Error = $Error;
      $this->Mode = $Mode;
    }

    /**
     * @return StringArray
     */
    public function getOldValues()
    {
      return $this->OldValues;
    }

    /**
     * @param StringArray $OldValues
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDeltaChange
     */
    public function setOldValues($OldValues)
    {
      $this->OldValues = $OldValues;
      return $this;
    }

    /**
     * @return StringArray
     */
    public function getNewValues()
    {
      return $this->NewValues;
    }

    /**
     * @param StringArray $NewValues
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDeltaChange
     */
    public function setNewValues($NewValues)
    {
      $this->NewValues = $NewValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDeltaChange
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return SimpleDataMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param SimpleDataMode $Mode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDeltaChange
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

}
