<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class UserInfo
{

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    /**
     * @var StringArray $Privileges
     */
    protected $Privileges = null;

    /**
     * @var VariantArray $Attributes
     */
    protected $Attributes = null;

    /**
     * @var base64Binary $UserData
     */
    protected $UserData = null;

    /**
     * @param string $SessionID
     * @param string $UserID
     * @param StringArray $Privileges
     * @param VariantArray $Attributes
     * @param base64Binary $UserData
     */
    public function __construct($SessionID, $UserID, $Privileges, $Attributes, $UserData)
    {
      $this->SessionID = $SessionID;
      $this->UserID = $UserID;
      $this->Privileges = $Privileges;
      $this->Attributes = $Attributes;
      $this->UserData = $UserData;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\UserInfo
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\UserInfo
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return StringArray
     */
    public function getPrivileges()
    {
      return $this->Privileges;
    }

    /**
     * @param StringArray $Privileges
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\UserInfo
     */
    public function setPrivileges($Privileges)
    {
      $this->Privileges = $Privileges;
      return $this;
    }

    /**
     * @return VariantArray
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param VariantArray $Attributes
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\UserInfo
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getUserData()
    {
      return $this->UserData;
    }

    /**
     * @param base64Binary $UserData
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\UserInfo
     */
    public function setUserData($UserData)
    {
      $this->UserData = $UserData;
      return $this;
    }

}
