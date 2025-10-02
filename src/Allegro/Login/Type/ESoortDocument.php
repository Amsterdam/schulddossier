<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

/**
 * AW_aSoortDocument in AllegroWebPortierConst
 */
enum ESoortDocument: string {
    case Onbekend = 'Onbekend';
    case Formulier = 'Formulier';
    case Resultaat = 'Resultaat';
    case Leningaanvraag = 'Leningaanvraag';
    case DKaanvraag = 'DKaanvraag';
    case SRaanvraag = 'SRaanvraag';
}
