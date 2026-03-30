<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSRVEisersResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVEisers
     */
    private $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVEisers
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVEisers $Result
     * @return SchuldHulpServiceGetSRVEisersResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

