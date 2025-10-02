<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVOverzichtResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray
     */
    public function getResult() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray $Result
     * @return static
     */
    public function withResult(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray $Result) : static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

