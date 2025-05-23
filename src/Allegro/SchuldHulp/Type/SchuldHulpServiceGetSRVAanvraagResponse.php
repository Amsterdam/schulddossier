<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVAanvraagResponse implements ResultInterface
{

    /**
     * @var TSRVAanvraag
     */
    private $Result;

    /**
     * @return TSRVAanvraag
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param TSRVAanvraag $Result
     * @return SchuldHulpServiceGetSRVAanvraagResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

