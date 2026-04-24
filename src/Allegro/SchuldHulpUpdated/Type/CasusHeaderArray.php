<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class CasusHeaderArray
{
    /**
     * TCasusHeader bevat : 
     * - Relatiecode
     * - Volgnummer
     * - Aanmaakdatum
     * - CasusStatus
     *  * Aanmelding (aanmelding 'in progress')
     *  * Aanmelding voltooid (aanmelding voltooid)
     *  * Inventarisatie (inventarisatie bezig)
     *  * Analyse (analyse bezig)
     *  * Plan Van Aanpak (plan van aanpak bezig)
     *  * Fiattering (fiattering bezig)
     *  * Slapend (laatste plan van aanpak gefiatteerd)
     *  * Crisis (crisis)
     *  * Afwijzing (casus zit in afwijzingsfase)
     *  * Einde (casus zit in beeindigingsfase)
     *  * Inactief (casus niet meer actief)
     *  * Geen status
     *
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusHeader>
     */
    private array $TCasusHeader;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusHeader>
     */
    public function getTCasusHeader(): array
    {
        return $this->TCasusHeader;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusHeader> $TCasusHeader
     * @return static
     */
    public function withTCasusHeader(array $TCasusHeader): static
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }
}

