<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DataParameterArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter
     */
    private $DataParameter;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter $DataParameter
     */
    public function __construct($DataParameter)
    {
        $this->DataParameter = $DataParameter;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter
     */
    public function getDataParameter()
    {
        return $this->DataParameter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter $DataParameter
     * @return DataParameterArray
     */
    public function withDataParameter($DataParameter)
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }


}

