<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVOverzichtResponse implements ResultInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVAanvraagHeaderArray
     */
    private $Result;

    /**
     * @return SRVAanvraagHeaderArray
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param SRVAanvraagHeaderArray $Result
     * @return SchuldHulpServiceGetSRVOverzichtResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

