<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDelta implements RequestInterface
{
    /**
     * @var string
     */
    private string $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows;

    /**
     * Constructor
     *
     * @param string $TableName
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows
     */
    public function __construct(string $TableName, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows)
    {
        $this->TableName = $TableName;
        $this->Fields = $Fields;
        $this->Rows = $Rows;
    }

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return static
     */
    public function withTableName(string $TableName) : static
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getFields() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
    {
        return $this->Fields;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields
     * @return static
     */
    public function withFields(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields) : static
    {
        $new = clone $this;
        $new->Fields = $Fields;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray
     */
    public function getRows() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray
    {
        return $this->Rows;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows
     * @return static
     */
    public function withRows(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows) : static
    {
        $new = clone $this;
        $new->Rows = $Rows;

        return $new;
    }
}

