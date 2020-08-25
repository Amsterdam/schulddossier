<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class UserInfo implements RequestInterface
{

    /**
     * @var string
     */
    private $SessionID;

    /**
     * @var string
     */
    private $UserID;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private $Privileges;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray
     */
    private $Attributes;

    /**
     * @var string
     */
    private $UserData;

    /**
     * Constructor
     *
     * @var string $SessionID
     * @var string $UserID
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes
     * @var string $UserData
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
     * @return UserInfo
     */
    public function withSessionID($SessionID)
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
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
     * @return UserInfo
     */
    public function withUserID($UserID)
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getPrivileges()
    {
        return $this->Privileges;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges
     * @return UserInfo
     */
    public function withPrivileges($Privileges)
    {
        $new = clone $this;
        $new->Privileges = $Privileges;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes
     * @return UserInfo
     */
    public function withAttributes($Attributes)
    {
        $new = clone $this;
        $new->Attributes = $Attributes;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserData()
    {
        return $this->UserData;
    }

    /**
     * @param string $UserData
     * @return UserInfo
     */
    public function withUserData($UserData)
    {
        $new = clone $this;
        $new->UserData = $UserData;

        return $new;
    }


}

