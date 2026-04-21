<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class RelatiecodeBedrijfcodeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRelatiecodeBedrijfcode
     */
    private $TRelatiecodeBedrijfcode;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRelatiecodeBedrijfcode
     */
    public function getTRelatiecodeBedrijfcode()
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRelatiecodeBedrijfcode $TRelatiecodeBedrijfcode
     * @return RelatiecodeBedrijfcodeArray
     */
    public function withTRelatiecodeBedrijfcode($TRelatiecodeBedrijfcode)
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}
