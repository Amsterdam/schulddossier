<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleDeltaChange implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private $OldValues;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private $NewValues;

    /**
     * @var string
     */
    private $Error;

    /**
     * @var string
     */
    private $Mode;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $OldValues
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $NewValues
     * @var string $Error
     * @var string $Mode
     */
    public function __construct($OldValues, $NewValues, $Error, $Mode)
    {
        $this->OldValues = $OldValues;
        $this->NewValues = $NewValues;
        $this->Error = $Error;
        $this->Mode = $Mode;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getOldValues()
    {
        return $this->OldValues;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $OldValues
     * @return SimpleDeltaChange
     */
    public function withOldValues($OldValues)
    {
        $new = clone $this;
        $new->OldValues = $OldValues;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getNewValues()
    {
        return $this->NewValues;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $NewValues
     * @return SimpleDeltaChange
     */
    public function withNewValues($NewValues)
    {
        $new = clone $this;
        $new->NewValues = $NewValues;

        return $new;
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
     * @return SimpleDeltaChange
     */
    public function withError($Error)
    {
        $new = clone $this;
        $new->Error = $Error;

        return $new;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * @param string $Mode
     * @return SimpleDeltaChange
     */
    public function withMode($Mode)
    {
        $new = clone $this;
        $new->Mode = $Mode;

        return $new;
    }


}

