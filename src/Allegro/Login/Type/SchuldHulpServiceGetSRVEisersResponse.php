<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVEisersResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers
     */
    public function getResult() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers $Result
     * @return static
     */
    public function withResult(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers $Result) : static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

