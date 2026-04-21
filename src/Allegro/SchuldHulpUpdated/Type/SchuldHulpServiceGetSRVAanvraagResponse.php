<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVAanvraagResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraag
     */
    private $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraag
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraag $Result
     * @return SchuldHulpServiceGetSRVAanvraagResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}
