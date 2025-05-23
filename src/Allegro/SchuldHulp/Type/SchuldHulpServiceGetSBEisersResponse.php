<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSBEisersResponse implements ResultInterface
{

    /**
     * @var TSBEisers
     */
    private $Result;

    /**
     * @return TSBEisers
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param TSBEisers $Result
     * @return SchuldHulpServiceGetSBEisersResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

