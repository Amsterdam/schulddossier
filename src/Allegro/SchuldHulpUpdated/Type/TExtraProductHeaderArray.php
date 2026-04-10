<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TExtraProductHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TExtraProductHeader
     */
    private $TExtraProductHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TExtraProductHeader
     */
    public function getTExtraProductHeader()
    {
        return $this->TExtraProductHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TExtraProductHeader $TExtraProductHeader
     * @return TExtraProductHeaderArray
     */
    public function withTExtraProductHeader($TExtraProductHeader)
    {
        $new = clone $this;
        $new->TExtraProductHeader = $TExtraProductHeader;

        return $new;
    }
}

