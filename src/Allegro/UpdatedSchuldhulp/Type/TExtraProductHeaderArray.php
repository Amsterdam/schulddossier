<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TExtraProductHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TExtraProductHeader
     */
    private $TExtraProductHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TExtraProductHeader
     */
    public function getTExtraProductHeader()
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TExtraProductHeader $TExtraProductHeader
     * @return TExtraProductHeaderArray
     */
    public function withTExtraProductHeader($TExtraProductHeader)
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }
}

