<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSBOverzichtResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray
     */
    public function getResult() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray $Result
     * @return static
     */
    public function withResult(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray $Result) : static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

