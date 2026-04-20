<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDelta implements RequestInterface
{
    /**
     * @var string
     */
    private $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private $Fields;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray
     */
    private $Rows;

    /**
     * Constructor
     *
     * @var string $TableName
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows
     */
    public function __construct($TableName, $Fields, $Rows)
    {
        $this->TableName = $TableName;
        $this->Fields = $Fields;
        $this->Rows = $Rows;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return SimpleDelta
     */
    public function withTableName($TableName)
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $Fields
     * @return SimpleDelta
     */
    public function withFields($Fields)
    {
        $new = clone $this;
        $new->Fields = $Fields;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray
     */
    public function getRows()
    {
        return $this->Rows;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray $Rows
     * @return SimpleDelta
     */
    public function withRows($Rows)
    {
        $new = clone $this;
        $new->Rows = $Rows;

        return $new;
    }
}
