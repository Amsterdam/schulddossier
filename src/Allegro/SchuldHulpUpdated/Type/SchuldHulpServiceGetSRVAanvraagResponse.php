<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVAanvraagResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraag
     */
    private $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraag
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraag $Result
     * @return SchuldHulpServiceGetSRVAanvraagResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

