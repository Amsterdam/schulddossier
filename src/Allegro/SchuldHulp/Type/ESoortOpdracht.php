<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum ESoortOpdracht: string {
    case ReserveringOfDoorbetaling = 'ReserveringOfDoorbetaling';
    case Reservering = 'Reservering';
    case Doorbetaling = 'Doorbetaling';
}
