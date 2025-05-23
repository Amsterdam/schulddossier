<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVEisersResponse implements ResultInterface
{

    /**
     * @var TSRVEisers
     */
    private $Result;

    /**
     * @return TSRVEisers
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param TSRVEisers $Result
     * @return SchuldHulpServiceGetSRVEisersResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

