<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class UserInfo
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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $Privileges;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray $Attributes;

    /**
     * @var mixed
     */
    private mixed $UserData;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
     */
    public function getPrivileges() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
    {
        return $this->Privileges;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $Privileges
     * @return static
     */
    public function withPrivileges(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $Privileges) : static
    {
        $new = clone $this;
        $new->Privileges = $Privileges;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray
     */
    public function getAttributes() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray
    {
        return $this->Attributes;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray $Attributes
     * @return static
     */
    public function withAttributes(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray $Attributes) : static
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

