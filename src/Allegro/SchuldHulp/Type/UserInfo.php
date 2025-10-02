<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UserInfo implements RequestInterface
{
    /**
     * @var string
     */
    private string $SessionID;

    /**
     * @var string
     */
    private string $UserID;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes;

    /**
     * @var mixed
     */
    private mixed $UserData;

    /**
     * Constructor
     *
     * @param string $SessionID
     * @param string $UserID
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes
     * @param mixed $UserData
     */
    public function __construct(string $SessionID, string $UserID, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes, mixed $UserData)
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
    public function getSessionID() : string
    {
        return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return static
     */
    public function withSessionID(string $SessionID) : static
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserID() : string
    {
        return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return static
     */
    public function withUserID(string $UserID) : static
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getPrivileges() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
    {
        return $this->Privileges;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges
     * @return static
     */
    public function withPrivileges(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Privileges) : static
    {
        $new = clone $this;
        $new->Privileges = $Privileges;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray
     */
    public function getAttributes() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray
    {
        return $this->Attributes;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes
     * @return static
     */
    public function withAttributes(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray $Attributes) : static
    {
        $new = clone $this;
        $new->Attributes = $Attributes;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getUserData() : mixed
    {
        return $this->UserData;
    }

    /**
     * @param mixed $UserData
     * @return static
     */
    public function withUserData(mixed $UserData) : static
    {
        $new = clone $this;
        $new->UserData = $UserData;

        return $new;
    }
}

