<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class StringArrayArray implements RequestInterface
{

    /**
     * @var StringArray
     */
    private $StringArray;

    /**
     * Constructor
     *
     * @var StringArray $StringArray
     */
    public function __construct($StringArray)
    {
        $this->StringArray = $StringArray;
    }

    /**
     * @return StringArray
     */
    public function getStringArray()
    {
        return $this->StringArray;
    }

    /**
     * @param StringArray $StringArray
     * @return StringArrayArray
     */
    public function withStringArray($StringArray)
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }


}

