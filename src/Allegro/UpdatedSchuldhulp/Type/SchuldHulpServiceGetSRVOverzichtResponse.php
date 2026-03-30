<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVOverzichtResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SRVAanvraagHeaderArray
     */
    private $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SRVAanvraagHeaderArray
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SRVAanvraagHeaderArray $Result
     * @return SchuldHulpServiceGetSRVOverzichtResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

