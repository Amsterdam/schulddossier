<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class RelatiecodeBedrijfcodeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRelatiecodeBedrijfcode
     */
    private $TRelatiecodeBedrijfcode;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRelatiecodeBedrijfcode
     */
    public function getTRelatiecodeBedrijfcode()
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRelatiecodeBedrijfcode $TRelatiecodeBedrijfcode
     * @return RelatiecodeBedrijfcodeArray
     */
    public function withTRelatiecodeBedrijfcode($TRelatiecodeBedrijfcode)
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}

