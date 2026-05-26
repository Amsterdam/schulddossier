<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TSorteerInfo
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EVeldSortering
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EVeldSortering $Veld;

    /**
     * @var bool
     */
    private bool $Oplopend;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EVeldSortering
     */
    public function getVeld(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EVeldSortering
    {
        return $this->Veld;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EVeldSortering $Veld
     * @return static
     */
    public function withVeld(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EVeldSortering $Veld): static
    {
        $new = clone $this;
        $new->Veld = $Veld;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOplopend(): bool
    {
        return $this->Oplopend;
    }

    /**
     * @param bool $Oplopend
     * @return static
     */
    public function withOplopend(bool $Oplopend): static
    {
        $new = clone $this;
        $new->Oplopend = $Oplopend;

        return $new;
    }
}

