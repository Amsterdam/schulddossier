<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TSorteerInfo
{
    /**
     * @var 'vsCode' | 'vsAfzenderOntvanger' | 'vsOnderwerp' | 'vsTijdstip' | 'vsOntvangen' | 'vsGelezen' | 'vsGearchiveerd' | 'vsBijlagen'
     */
    private string $Veld;

    /**
     * @var bool
     */
    private bool $Oplopend;

    /**
     * @return 'vsCode' | 'vsAfzenderOntvanger' | 'vsOnderwerp' | 'vsTijdstip' | 'vsOntvangen' | 'vsGelezen' | 'vsGearchiveerd' | 'vsBijlagen'
     */
    public function getVeld(): string
    {
        return $this->Veld;
    }

    /**
     * @param 'vsCode' | 'vsAfzenderOntvanger' | 'vsOnderwerp' | 'vsTijdstip' | 'vsOntvangen' | 'vsGelezen' | 'vsGearchiveerd' | 'vsBijlagen' $Veld
     * @return static
     */
    public function withVeld(string $Veld): static
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

