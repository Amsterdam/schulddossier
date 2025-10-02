<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum ESoortOpdracht: string {
    case ReserveringOfDoorbetaling = 'ReserveringOfDoorbetaling';
    case Reservering = 'Reservering';
    case Doorbetaling = 'Doorbetaling';
}
