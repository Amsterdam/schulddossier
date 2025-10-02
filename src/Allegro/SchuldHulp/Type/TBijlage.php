<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBijlage implements RequestInterface
{
    /**
     * AW_aSoortDocument in AllegroWebPortierConst
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $Soort;

    /**
     * @var string
     */
    private string $Extension;

    /**
     * @var mixed
     */
    private mixed $Bijlage;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $Soort
     * @param string $Extension
     * @param mixed $Bijlage
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $Soort, string $Extension, mixed $Bijlage)
    {
        $this->Soort = $Soort;
        $this->Extension = $Extension;
        $this->Bijlage = $Bijlage;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument
     */
    public function getSoort() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument
    {
        return $this->Soort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $Soort
     * @return static
     */
    public function withSoort(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $Soort) : static
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

