<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSBOverzichtResponse implements ResultInterface
{

    /**
     * @var SBHeaderArray
     */
    private $Result;

    /**
     * @return SBHeaderArray
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param SBHeaderArray $Result
     * @return SchuldHulpServiceGetSBOverzichtResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

