<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBijlage
{
    /**
     * AW_aSoortDocument in AllegroWebPortierConst
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ESoortDocument
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ESoortDocument $Soort;

    /**
     * @var string
     */
    private string $Extension;

    /**
     * @var mixed
     */
    private mixed $Bijlage;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ESoortDocument
     */
    public function getSoort() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ESoortDocument
    {
        return $this->Soort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ESoortDocument $Soort
     * @return static
     */
    public function withSoort(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ESoortDocument $Soort) : static
    {
        $new = clone $this;
        $new->Soort = $Soort;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension() : string
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return static
     */
    public function withExtension(string $Extension) : static
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getBijlage() : mixed
    {
        return $this->Bijlage;
    }

    /**
     * @param mixed $Bijlage
     * @return static
     */
    public function withBijlage(mixed $Bijlage) : static
    {
        $new = clone $this;
        $new->Bijlage = $Bijlage;

        return $new;
    }
}

