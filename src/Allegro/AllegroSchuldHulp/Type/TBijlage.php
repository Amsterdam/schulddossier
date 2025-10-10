<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TBijlage
{
    /**
     * @var string
     */
    private $Soort;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $Bijlage;

    /**
     * @return string
     */
    public function getSoort()
    {
        return $this->Soort;
    }

    /**
     * @param string $Soort
     * @return TBijlage
     */
    public function withSoort($Soort)
    {
        $new = clone $this;
        $new->Soort = $Soort;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return TBijlage
     */
    public function withExtension($Extension)
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return string
     */
    public function getBijlage()
    {
        return $this->Bijlage;
    }

    /**
     * @param string $Bijlage
     * @return TBijlage
     */
    public function withBijlage($Bijlage)
    {
        $new = clone $this;
        $new->Bijlage = $Bijlage;

        return $new;
    }
}

