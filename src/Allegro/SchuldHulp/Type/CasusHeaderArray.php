<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusHeaderArray implements RequestInterface
{
    /**
     * TCasusHeader bevat :
     *  - Relatiecode
     *  - Volgnummer
     *  - Aanmaakdatum
     *  - CasusStatus
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
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader>
     */
    private array $TCasusHeader;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader> $TCasusHeader
     */
    public function __construct(array $TCasusHeader)
    {
        $this->TCasusHeader = $TCasusHeader;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader>
     */
    public function getTCasusHeader() : array
    {
        return $this->TCasusHeader;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader> $TCasusHeader
     * @return static
     */
    public function withTCasusHeader(array $TCasusHeader) : static
    {
        $new = clone $this;
        $new->TCasusHeader = $TCasusHeader;

        return $new;
    }
}

