<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StringArrayArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
     */
    private $StringArray;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $StringArray
     */
    public function __construct($StringArray)
    {
        $this->StringArray = $StringArray;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray
     */
    public function getStringArray()
    {
        return $this->StringArray;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray $StringArray
     * @return StringArrayArray
     */
    public function withStringArray($StringArray)
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}
