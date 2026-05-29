<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

/**
 * Enum voor Beschikbaar Budget berekenen. Moet dit met saldo vrij opneembare reserveringen, of met saldo reservering leefgeld.
 */
enum EBeschikbaarBudget: string
{
    case bbVrijeReserveringen = 'bbVrijeReserveringen';
    case bbLeefgeld = 'bbLeefgeld';
}
