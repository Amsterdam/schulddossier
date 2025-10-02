<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVAanvraagResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag
     */
    public function getResult() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag $Result
     * @return static
     */
    public function withResult(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag $Result) : static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

