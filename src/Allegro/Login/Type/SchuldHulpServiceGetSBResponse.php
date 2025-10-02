<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetSBResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB $Result;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB
     */
    public function getResult() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB $Result
     * @return static
     */
    public function withResult(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB $Result) : static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }
}

