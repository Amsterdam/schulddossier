<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DataParameterArray implements RequestInterface
{

    /**
     * @var DataParameter
     */
    private $DataParameter;

    /**
     * Constructor
     *
     * @var DataParameter $DataParameter
     */
    public function __construct($DataParameter)
    {
        $this->DataParameter = $DataParameter;
    }

    /**
     * @return DataParameter
     */
    public function getDataParameter()
    {
        return $this->DataParameter;
    }

    /**
     * @param DataParameter $DataParameter
     * @return DataParameterArray
     */
    public function withDataParameter($DataParameter)
    {
        $new = clone $this;
        $new->DataParameter = $DataParameter;

        return $new;
    }


}

