<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

enum ESoortOpdracht: string {
    case ReserveringOfDoorbetaling = 'ReserveringOfDoorbetaling';
    case Reservering = 'Reservering';
    case Doorbetaling = 'Doorbetaling';
}
