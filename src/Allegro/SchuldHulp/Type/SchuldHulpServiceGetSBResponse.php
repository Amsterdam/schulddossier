<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSBResponse implements ResultInterface
{

    /**
     * @var TSB
     */
    private $Result;

    /**
     * @return TSB
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param TSB $Result
     * @return SchuldHulpServiceGetSBResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

